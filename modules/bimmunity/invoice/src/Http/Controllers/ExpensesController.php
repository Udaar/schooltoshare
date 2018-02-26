<?php

namespace Bimmunity\Invoice\Http\Controllers;

use Bimmunity\Invoice\Http\Requests\CreateExpensesRequest;
use Bimmunity\Invoice\Http\Requests\UpdateExpensesRequest;
use Bimmunity\Invoice\Repositories\CurrencyRepository;
use Bimmunity\Invoice\Repositories\ExpensesRepository;
use App\Http\Controllers\AppBaseController;
use Bimmunity\Invoice\Repositories\ExpensesTypeRepository;
use Bimmunity\Invoice\Repositories\AccountRepository;
use Illuminate\Http\Request;
use Bimmunity\Invoice\Repositories\VendorRepository;
use Flash;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\File;

class ExpensesController extends AppBaseController
{
    /** @var  ExpensesRepository */
    private $expensesRepository;

    /** @var  ExpensesTypeRepository */
    private $typeRepository;

    /** @var  CurrencyRepository */
    private $currencyRepository;

    private $AccountRepository;
    private $VendorRepository;

    /** @var  User */
    private $user;

    public function __construct(VendorRepository $VendorRepository,ExpensesRepository $expensesRepo ,AccountRepository $AccountRepository, ExpensesTypeRepository $expensesTypeRepo, CurrencyRepository $currencyRepo)
    {
        $this->expensesRepository = $expensesRepo;
        $this->typeRepository = $expensesTypeRepo;
        $this->VendorRepository = $VendorRepository;
        $this->AccountRepository = $AccountRepository;
        $this->currencyRepository = $currencyRepo;
        $this->middleware(function ($request, $next) {
             $this->user = Auth::user();
            return $next($request);
        });
    }

    /**
     * Display a listing of the Expenses.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->expensesRepository->pushCriteria(new RequestCriteria($request));
        $expenses = $this->expensesRepository->all();

        return view('bimmunity/invoice::expenses.index')
            ->with('expenses', $expenses);
    }

    /**
     * Show the form for creating a new Expenses.
     *
     * @return Response
     */
    public function create()
    {
        $types = $this->typeRepository->pluck('name', 'id');
        $currencies = $this->currencyRepository->pluck('code', 'id');
        $accounts = $this->AccountRepository->all()->pluck('name', 'id');
        $vendors = $this->VendorRepository->all()->pluck('name', 'id');
        $invoices = $this->user->invoices->pluck('code', 'id');

        return view('bimmunity/invoice::expenses.create', compact('vendors','accounts','types', 'currencies', 'invoices'));
    }

    /**
     * Store a newly created Expenses in storage.
     *
     * @param CreateExpensesRequest $request
     *
     * @return Response
     */
    public function store(CreateExpensesRequest $request)
    {
        $this->validate($request,[
            'amount'=>'required|numeric|min:0'
        ]);
        $input = $request->all();
        $expenses = $this->expensesRepository->create($input);
        if(! empty($input['profile'])){
            // store the image
            $profilePicture = File::getFileByPath($input['profile']);
            $expenses->files()->attach($profilePicture,['is_profile'=>1]);
        }
        else{
            // set a place holder
            $expenses->files()->attach(File::getFileByPath(config('ifm.buildings.image_placeholder')));
        }

        Flash::success('Expenses saved successfully.');

        return redirect(route('expenses.index'));
    }

    /**
     * Display the specified Expenses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $expenses = $this->expensesRepository->findWithoutFail($id);

        if (empty($expenses)) {
            Flash::error('Expenses not found');

            return redirect(route('expenses.index'));
        }

        return view('bimmunity/invoice::expenses.show')->with('expenses', $expenses);
    }

    /**
     * Show the form for editing the specified Expenses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $expenses = $this->expensesRepository->findWithoutFail($id);

        $types = $this->typeRepository->pluck('name', 'id');
        $currencies = $this->currencyRepository->pluck('code', 'id');
        $invoices = $this->user->invoices->pluck('code', 'id');
        $accounts = $this->AccountRepository->all()->pluck('name', 'id');
        $vendors = $this->VendorRepository->all()->pluck('name', 'id');
        $attachedInvoices = $expenses->invoices->pluck('id')->toArray();

        if (empty($expenses)) {
            Flash::error('Expenses not found');

            return redirect(route('expenses.index'));
        }

        return view('bimmunity/invoice::expenses.edit', compact('vendors','accounts','types', 'currencies', 'expenses', 'invoices', 'attachedInvoices'));
    }

    /**
     * Update the specified Expenses in storage.
     *
     * @param  int              $id
     * @param UpdateExpensesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExpensesRequest $request)
    {
        
        $expenses = $this->expensesRepository->findWithoutFail($id);

        if (empty($expenses)) {
            Flash::error('Expenses not found');

            return redirect(route('expenses.index'));
        }

        $expenses = $this->expensesRepository->update($request->all(), $id);
        if ($request->file('photo')) {
               $file = $request->file('photo');
               $fileid=File::upload($file,'uploads');
               $expenses->files()->attach(File::where('id',$fileid)->get()->first(),['is_profile'=>1]); 
         }
        Flash::success('Expenses updated successfully.');

        return redirect(route('expenses.index'));
    }

    /**
     * Remove the specified Expenses from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $expenses = $this->expensesRepository->findWithoutFail($id);

        if (empty($expenses)) {
            Flash::error('Expenses not found');

            return redirect(route('expenses.index'));
        }

        $this->expensesRepository->delete($id);

        Flash::success('Expenses deleted successfully.');

        return redirect(route('expenses.index'));
    }
}
