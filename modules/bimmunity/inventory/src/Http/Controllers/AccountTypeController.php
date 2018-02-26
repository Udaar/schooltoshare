<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateAccountTypeRequest;
use Bimmunity\Inventory\Http\Requests\UpdateAccountTypeRequest;
use Bimmunity\Inventory\Repositories\AccountTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AccountTypeController extends AppBaseController
{
    /** @var  AccountTypeRepository */
    private $accountTypeRepository;

    public function __construct(AccountTypeRepository $accountTypeRepo)
    {
        
        $this->accountTypeRepository = $accountTypeRepo;
    }

    /**
     * Display a listing of the AccountType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->accountTypeRepository->pushCriteria(new RequestCriteria($request));
        $accountTypes = $this->accountTypeRepository->all();

        return view('inventory::account_types.index')
            ->with('accountTypes', $accountTypes);
    }

    /**
     * Show the form for creating a new AccountType.
     *
     * @return Response
     */
    public function create()
    {
        return view('inventory::account_types.create');
    }

    /**
     * Store a newly created AccountType in storage.
     *
     * @param CreateAccountTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateAccountTypeRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();

        $accountType = $this->accountTypeRepository->create($input);

        Flash::success('Account Type saved successfully.');

        return redirect(route('accountTypes.index'));
    }

    /**
     * Display the specified AccountType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $accountType = $this->accountTypeRepository->findWithoutFail($id);

        if (empty($accountType)) {
            Flash::error('Account Type not found');

            return redirect(route('accountTypes.index'));
        }

        return view('inventory::account_types.show')->with('accountType', $accountType);
    }

    /**
     * Show the form for editing the specified AccountType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $accountType = $this->accountTypeRepository->findWithoutFail($id);

        if (empty($accountType)) {
            Flash::error('Account Type not found');

            return redirect(route('accountTypes.index'));
        }

        return view('inventory::account_types.edit')->with('accountType', $accountType);
    }

    /**
     * Update the specified AccountType in storage.
     *
     * @param  int              $id
     * @param UpdateAccountTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAccountTypeRequest $request)
    {
        $accountType = $this->accountTypeRepository->findWithoutFail($id);

        if (empty($accountType)) {
            Flash::error('Account Type not found');

            return redirect(route('accountTypes.index'));
        }
        $request['created_by'] = auth()->id();

        $accountType = $this->accountTypeRepository->update($request->all(), $id);

        Flash::success('Account Type updated successfully.');

        return redirect(route('accountTypes.index'));
    }

    /**
     * Remove the specified AccountType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $accountType = $this->accountTypeRepository->findWithoutFail($id);

        if (empty($accountType)) {
            Flash::error('Account Type not found');

            return redirect(route('accountTypes.index'));
        }

        $this->accountTypeRepository->delete($id);

        Flash::success('Account Type deleted successfully.');

        return redirect(route('accountTypes.index'));
    }
}
