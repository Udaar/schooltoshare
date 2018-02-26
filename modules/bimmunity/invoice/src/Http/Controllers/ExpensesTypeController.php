<?php

namespace Bimmunity\Invoice\Http\Controllers;

use Bimmunity\Invoice\Http\Requests\CreateExpensesTypeRequest;
use Bimmunity\Invoice\Http\Requests\UpdateExpensesTypeRequest;
use Bimmunity\Invoice\Repositories\ExpensesTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ExpensesTypeController extends AppBaseController
{
    /** @var  ExpensesTypeRepository */
    private $expensesTypeRepository;

    public function __construct(ExpensesTypeRepository $expensesTypeRepo)
    {
       
        $this->expensesTypeRepository = $expensesTypeRepo;
    }

    /**
     * Display a listing of the ExpensesType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        
        $this->expensesTypeRepository->pushCriteria(new RequestCriteria($request));
        $expensesTypes = $this->expensesTypeRepository->all();

        return view('bimmunity/invoice::expenses_types.index')
            ->with('expensesTypes', $expensesTypes);
    }

    /**
     * Show the form for creating a new ExpensesType.
     *
     * @return Response
     */
    public function create()
    {
        return view('bimmunity/invoice::expenses_types.create');
    }

    /**
     * Store a newly created ExpensesType in storage.
     *
     * @param CreateExpensesTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateExpensesTypeRequest $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]);
        $input = $request->all();

        $expensesType = $this->expensesTypeRepository->create($input);

        Flash::success('Expenses Type saved successfully.');

        return redirect(route('expenses_types.index'));
    }

    /**
     * Display the specified ExpensesType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $expensesType = $this->expensesTypeRepository->findWithoutFail($id);

        if (empty($expensesType)) {
            Flash::error('Expenses Type not found');

            return redirect(route('expenses_types.index'));
        }

        return view('bimmunity/invoice::expenses_types.show')->with('expensesType', $expensesType);
    }

    /**
     * Show the form for editing the specified ExpensesType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $expensesType = $this->expensesTypeRepository->findWithoutFail($id);

        if (empty($expensesType)) {
            Flash::error('Expenses Type not found');

            return redirect(route('expenses_types.index'));
        }

        return view('bimmunity/invoice::expenses_types.edit')->with('expensesType', $expensesType);
    }

    /**
     * Update the specified ExpensesType in storage.
     *
     * @param  int              $id
     * @param UpdateExpensesTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateExpensesTypeRequest $request)
    {
        $expensesType = $this->expensesTypeRepository->findWithoutFail($id);

        if (empty($expensesType)) {
            Flash::error('Expenses Type not found');

            return redirect(route('expenses_types.index'));
        }

        $expensesType = $this->expensesTypeRepository->update($request->all(), $id);

        Flash::success('Expenses Type updated successfully.');

        return redirect(route('expenses_types.index'));
    }

    /**
     * Remove the specified ExpensesType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $expensesType = $this->expensesTypeRepository->findWithoutFail($id);

        if (empty($expensesType)) {
            Flash::error('Expenses Type not found');

            return redirect(route('expenses_types.index'));
        }

        $this->expensesTypeRepository->delete($id);

        Flash::success('Expenses Type deleted successfully.');

        return redirect(route('expenses_types.index'));
    }
}
