<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateFinanceAccountRequest;
use Bimmunity\Inventory\Http\Requests\UpdateFinanceAccountRequest;
use Bimmunity\Inventory\Models\AccountType;
use Bimmunity\Inventory\Models\Bank;
use Bimmunity\Inventory\Repositories\FinanceAccountRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FinanceAccountController extends AppBaseController
{
    /** @var  FinanceAccountRepository */
    private $financeAccountRepository;

    public function __construct(FinanceAccountRepository $financeAccountRepo)
    {
        
        $this->financeAccountRepository = $financeAccountRepo;
    }

    /**
     * Display a listing of the FinanceAccount.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->financeAccountRepository->pushCriteria(new RequestCriteria($request));
        $financeAccounts = $this->financeAccountRepository->all();

        return view('inventory::finance_accounts.index')
            ->with('financeAccounts', $financeAccounts);
    }

    /**
     * Show the form for creating a new FinanceAccount.
     *
     * @return Response
     */
    public function create()
    {
        $accountTypes = AccountType::all();
        $banks = Bank::all();
        return view('inventory::finance_accounts.create')
            ->with('accountTypes', $accountTypes)
            ->with('banks', $banks);
    }

    /**
     * Store a newly created FinanceAccount in storage.
     *
     * @param CreateFinanceAccountRequest $request
     *
     * @return Response
     */
    public function store(CreateFinanceAccountRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();

        $financeAccount = $this->financeAccountRepository->create($input);

        Flash::success('Finance Account saved successfully.');

        return redirect(route('financeAccounts.index'));
    }

    /**
     * Display the specified FinanceAccount.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $financeAccount = $this->financeAccountRepository->findWithoutFail($id);

        if (empty($financeAccount)) {
            Flash::error('Finance Account not found');

            return redirect(route('financeAccounts.index'));
        }

        return view('inventory::finance_accounts.show')->with('financeAccount', $financeAccount);
    }

    /**
     * Show the form for editing the specified FinanceAccount.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $financeAccount = $this->financeAccountRepository->findWithoutFail($id);
        $accountTypes = AccountType::all();
        $banks = Bank::all();

        if (empty($financeAccount)) {
            Flash::error('Finance Account not found');

            return redirect(route('financeAccounts.index'));
        }

        return view('inventory::finance_accounts.edit')
            ->with('accountTypes', $accountTypes)
            ->with('banks', $banks)
            ->with('financeAccount', $financeAccount);
    }

    /**
     * Update the specified FinanceAccount in storage.
     *
     * @param  int              $id
     * @param UpdateFinanceAccountRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFinanceAccountRequest $request)
    {
        $financeAccount = $this->financeAccountRepository->findWithoutFail($id);

        if (empty($financeAccount)) {
            Flash::error('Finance Account not found');

            return redirect(route('financeAccounts.index'));
        }
        $request['created_by'] = auth()->id();

        $financeAccount = $this->financeAccountRepository->update($request->all(), $id);

        Flash::success('Finance Account updated successfully.');

        return redirect(route('financeAccounts.index'));
    }

    /**
     * Remove the specified FinanceAccount from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $financeAccount = $this->financeAccountRepository->findWithoutFail($id);

        if (empty($financeAccount)) {
            Flash::error('Finance Account not found');

            return redirect(route('financeAccounts.index'));
        }

        $this->financeAccountRepository->delete($id);

        Flash::success('Finance Account deleted successfully.');

        return redirect(route('financeAccounts.index'));
    }
}
