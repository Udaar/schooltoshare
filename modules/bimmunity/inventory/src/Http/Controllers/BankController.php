<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateBankRequest;
use Bimmunity\Inventory\Http\Requests\UpdateBankRequest;
use Bimmunity\Inventory\Repositories\BankRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BankController extends AppBaseController
{
    /** @var  BankRepository */
    private $bankRepository;

    public function __construct(BankRepository $bankRepo)
    {
        
        $this->bankRepository = $bankRepo;
    }

    /**
     * Display a listing of the Bank.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bankRepository->pushCriteria(new RequestCriteria($request));
        $banks = $this->bankRepository->all();

        return view('inventory::banks.index')
            ->with('banks', $banks);
    }

    /**
     * Show the form for creating a new Bank.
     *
     * @return Response
     */
    public function create()
    {
        return view('inventory::banks.create');
    }

    /**
     * Store a newly created Bank in storage.
     *
     * @param CreateBankRequest $request
     *
     * @return Response
     */
    public function store(CreateBankRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();

        $bank = $this->bankRepository->create($input);

        Flash::success('Bank saved successfully.');

        return redirect(route('banks.index'));
    }

    /**
     * Display the specified Bank.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bank = $this->bankRepository->findWithoutFail($id);

        if (empty($bank)) {
            Flash::error('Bank not found');

            return redirect(route('banks.index'));
        }

        return view('inventory::banks.show')->with('bank', $bank);
    }

    /**
     * Show the form for editing the specified Bank.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bank = $this->bankRepository->findWithoutFail($id);

        if (empty($bank)) {
            Flash::error('Bank not found');

            return redirect(route('banks.index'));
        }

        return view('inventory::banks.edit')->with('bank', $bank);
    }

    /**
     * Update the specified Bank in storage.
     *
     * @param  int              $id
     * @param UpdateBankRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBankRequest $request)
    {
        $bank = $this->bankRepository->findWithoutFail($id);

        if (empty($bank)) {
            Flash::error('Bank not found');

            return redirect(route('banks.index'));
        }

        $request['created_by'] = auth()->id();
        $bank = $this->bankRepository->update($request->all(), $id);

        Flash::success('Bank updated successfully.');

        return redirect(route('banks.index'));
    }

    /**
     * Remove the specified Bank from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bank = $this->bankRepository->findWithoutFail($id);

        if (empty($bank)) {
            Flash::error('Bank not found');

            return redirect(route('banks.index'));
        }

        $this->bankRepository->delete($id);

        Flash::success('Bank deleted successfully.');

        return redirect(route('banks.index'));
    }
}
