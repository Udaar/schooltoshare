<?php

namespace Bimmunity\Invoice\Http\Controllers;

use Illuminate\Http\Request;
use Bimmunity\Invoice\Http\Requests\CreateAccountRequest;
use Bimmunity\Invoice\Http\Requests\UpdateAccountRequest;
use Bimmunity\Invoice\Repositories\AccountRepository;
use App\Http\Controllers\AppBaseController;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Bimmunity\Invoice\Models\Currency;
use Bimmunity\Invoice\Models\Account;

use App\Http\Requests;

class AccountController extends AppBaseController
{
    private $AccountRepository;

    public function __construct(AccountRepository $AccountRepository)
    {
        $this->AccountRepository = $AccountRepository;
    }

    public function index(Request $request)
    {
        $this->AccountRepository->pushCriteria(new RequestCriteria($request));
        $accounts = $this->AccountRepository->all();

        return view('bimmunity/invoice::accounts.index')
            ->with('accounts', $accounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $flag = 1;
        $currencies =Currency::all()->pluck('code', 'id');
        return view('bimmunity/invoice::accounts.create',compact('currencies','flag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAccountRequest $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'number'=>'required|numeric|min:0',
        ]);
        $input = $request->all();

        $account = $this->AccountRepository->create($input);

        Flash::success('Account saved successfully.');

        return redirect(route('accounts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account = $this->AccountRepository->findWithoutFail($id);

        if (empty($account)) {
            Flash::error('Account not found');

            return redirect(route('accounts.index'));
        }

        return view('bimmunity/invoice::accounts.show')->with('account', $account);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $account = $this->AccountRepository->findWithoutFail($id);
        $currencies =Currency::all()->pluck('code', 'id');

        if (empty($account)) {
            Flash::error('Currency not found');

            return redirect(route('accounts.index'));
        }
        $flag = 0;
        return view('bimmunity/invoice::accounts.edit')->with('account', $account)
                                                 ->with('currencies', $currencies)->with('flag',$flag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateAccountRequest $request)
    {
        $account = $this->AccountRepository->findWithoutFail($id);

        if (empty($account)) {
            Flash::error('Account not found');

            return redirect(route('accounts.index'));
        }

        $account = $this->AccountRepository->update($request->all(), $id);

        Flash::success('Account updated successfully.');

        return redirect(route('accounts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = $this->AccountRepository->findWithoutFail($id);

        if (empty($account)) {
            Flash::error('Account not found');

            return redirect(route('accounts.index'));
        }

        $this->AccountRepository->delete($id);

        Flash::success('Account deleted successfully.');

        return redirect(route('accounts.index'));
    }
}
