<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateOrderPaymentRequest;
use Bimmunity\Inventory\Http\Requests\UpdateOrderPaymentRequest;
use Bimmunity\Inventory\Models\AccountType;
use Bimmunity\Inventory\Models\Company;
use Bimmunity\Inventory\Models\CompanyAccount;
use Bimmunity\Inventory\Models\OrderPayment;
use Bimmunity\Inventory\Models\OutOrder;
use Bimmunity\Inventory\Repositories\OrderPaymentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrderPaymentController extends AppBaseController
{
    /** @var  OrderPaymentRepository */
    private $orderPaymentRepository;

    public function __construct(OrderPaymentRepository $orderPaymentRepo)
    {
        
        $this->orderPaymentRepository = $orderPaymentRepo;
    }

    /**
     * Display a listing of the OrderPayment.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->orderPaymentRepository->pushCriteria(new RequestCriteria($request));
        $orderPayments = $this->orderPaymentRepository->all();

        return view('inventory::order_payments.index')
            ->with('orderPayments', $orderPayments);
    }

    public function ajax_company_account()
    {
        $company_id = \Illuminate\Support\Facades\Input::get('company_id');
        $stores = CompanyAccount::select(['company_accounts.id','company_accounts.account_number'])
            ->join('account_types','account_types.id','=','company_accounts.account_type_id','inner',false)
        ->where('company_accounts.company_id','=',$company_id)
            ->whereNull('account_types.deleted_at')
            ->whereNull('company_accounts.deleted_at')
            ->get();
        return $stores;
    }

    /**
     * Show the form for creating a new OrderPayment.
     *
     * @return Response
     */
    public function create()
    {
        $company_accounts = CompanyAccount::all();
        $out_orders = OutOrder::all();
        $companies = Company::all();
        return view('inventory::order_payments.create')
            ->with('companies', $companies)
            ->with('company_accounts', $company_accounts)
            ->with('out_orders', $out_orders);
    }

    /**
     * Store a newly created OrderPayment in storage.
     *
     * @param CreateOrderPaymentRequest $request
     *
     * @return Response
     */
    public function store(CreateOrderPaymentRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();
        $input['total_value'] = $request['total_value2'];
        $input['paid_date'] = date('Y-m-d h:i:s',strtotime($request['paid_date']));

        $temp_array['paid'] = floatval($request['paid']) + floatval($request['prev_paid']);
        $temp_array['remains'] = $request['remains'];

        OutOrder::where('id','=',$request['order_id'])->update($temp_array) ;

        $orderPayment = $this->orderPaymentRepository->create($input);

        Flash::success('Order Payment saved successfully.');

        return redirect(route('orderPayments.index'));
    }

    /**
     * Display the specified OrderPayment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderPayment = $this->orderPaymentRepository->findWithoutFail($id);

        if (empty($orderPayment)) {
            Flash::error('Order Payment not found');

            return redirect(route('orderPayments.index'));
        }

        return view('inventory::order_payments.show')->with('orderPayment', $orderPayment);
    }

    /**
     * Show the form for editing the specified OrderPayment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderPayment = $this->orderPaymentRepository->findWithoutFail($id);

        if (empty($orderPayment)) {
            Flash::error('Order Payment not found');

            return redirect(route('orderPayments.index'));
        }

        $company_accounts = CompanyAccount::all();
        $out_orders = OutOrder::all();
        $companies = Company::all();
        return view('inventory::order_payments.edit')
            ->with('companies', $companies)
            ->with('company_accounts', $company_accounts)
            ->with('out_orders', $out_orders)->with('orderPayment', $orderPayment);
    }

    /**
     * Update the specified OrderPayment in storage.
     *
     * @param  int              $id
     * @param UpdateOrderPaymentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrderPaymentRequest $request)
    {
        $orderPayment = $this->orderPaymentRepository->findWithoutFail($id);
        $request['total_value'] = $request['total_value2'];
        $request['paid_date'] = date('Y-m-d h:i:s',strtotime($request['paid_date']));

        if (empty($orderPayment)) {
            Flash::error('Order Payment not found');

            return redirect(route('orderPayments.index'));
        }
        $request['created_by'] = auth()->id();

        $orderPayment = $this->orderPaymentRepository->update($request->all(), $id);

        Flash::success('Order Payment updated successfully.');

        return redirect(route('orderPayments.index'));
    }

    /**
     * Remove the specified OrderPayment from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orderPayment = $this->orderPaymentRepository->findWithoutFail($id);

        if (empty($orderPayment)) {
            Flash::error('Order Payment not found');

            return redirect(route('orderPayments.index'));
        }

        $this->orderPaymentRepository->delete($id);

        Flash::success('Order Payment deleted successfully.');

        return redirect(route('orderPayments.index'));
    }

    public function get_order_payment()
    {
        $data = OutOrder::where('id','=',$_REQUEST['id'])->get();

        return \response()->json($data);
    }
}
