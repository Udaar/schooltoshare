<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateCompanyAccountRequest;
use Bimmunity\Inventory\Http\Requests\UpdateCompanyAccountRequest;
use Bimmunity\Inventory\Models\AccountType;
use Bimmunity\Inventory\Models\Bank;
use Bimmunity\Inventory\Models\Company;
use Bimmunity\Inventory\Repositories\AccountTypeRepository;
use Bimmunity\Inventory\Repositories\CompanyAccountRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CompanyAccountController extends AppBaseController
{
    /** @var  CompanyAccountRepository */
    private $companyAccountRepository;

    public function __construct(CompanyAccountRepository $companyAccountRepo)
    {
        
        $this->companyAccountRepository = $companyAccountRepo;
    }

    /**
     * Display a listing of the CompanyAccount.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->companyAccountRepository->pushCriteria(new RequestCriteria($request));
        $companyAccounts = $this->companyAccountRepository->all();

        return view('inventory::company_accounts.index')
            ->with('companyAccounts', $companyAccounts);
    }

    /**
     * Show the form for creating a new CompanyAccount.
     *
     * @return Response
     */
    public function create()
    {
        $accountTypes = AccountType::all();
        $banks = Bank::all();
        $companies = Company::all();
        return view('inventory::company_accounts.create')
            ->with('accountTypes', $accountTypes)
            ->with('banks', $banks)
            ->with('companies', $companies);
    }

    /**
     * Store a newly created CompanyAccount in storage.
     *
     * @param CreateCompanyAccountRequest $request
     *
     * @return Response
     */
    public function store(CreateCompanyAccountRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();

        $companyAccount = $this->companyAccountRepository->create($input);

        Flash::success('Company Account saved successfully.');

        return redirect(route('companyAccounts.index'));
    }

    /**
     * Display the specified CompanyAccount.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $companyAccount = $this->companyAccountRepository->findWithoutFail($id);

        if (empty($companyAccount)) {
            Flash::error('Company Account not found');

            return redirect(route('companyAccounts.index'));
        }

        return view('inventory::company_accounts.show')->with('companyAccount', $companyAccount);
    }

    /**
     * Show the form for editing the specified CompanyAccount.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $companyAccount = $this->companyAccountRepository->findWithoutFail($id);
        $accountTypes = AccountType::all();
        $banks = Bank::all();
        $companies = Company::all();

        if (empty($companyAccount)) {
            Flash::error('Company Account not found');

            return redirect(route('companyAccounts.index'));
        }

        return view('inventory::company_accounts.edit')->with('companyAccount', $companyAccount)
            ->with('accountTypes', $accountTypes)
            ->with('banks', $banks)
            ->with('companies', $companies);
    }

    /**
     * Update the specified CompanyAccount in storage.
     *
     * @param  int              $id
     * @param UpdateCompanyAccountRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCompanyAccountRequest $request)
    {
        $companyAccount = $this->companyAccountRepository->findWithoutFail($id);

        if (empty($companyAccount)) {
            Flash::error('Company Account not found');

            return redirect(route('companyAccounts.index'));
        }
        $request['created_by'] = auth()->id();

        $companyAccount = $this->companyAccountRepository->update($request->all(), $id);

        Flash::success('Company Account updated successfully.');

        return redirect(route('companyAccounts.index'));
    }

    /**
     * Remove the specified CompanyAccount from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $companyAccount = $this->companyAccountRepository->findWithoutFail($id);

        if (empty($companyAccount)) {
            Flash::error('Company Account not found');

            return redirect(route('companyAccounts.index'));
        }

        $this->companyAccountRepository->delete($id);

        Flash::success('Company Account deleted successfully.');

        return redirect(route('companyAccounts.index'));
    }
}
