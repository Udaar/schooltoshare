<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateFinanceRequest;
use Bimmunity\Inventory\Http\Requests\UpdateFinanceRequest;
use Bimmunity\Inventory\Models\AcceptedRecords;
use Bimmunity\Inventory\Models\InOrder;
use Bimmunity\Inventory\Models\InOrderItem;
use Bimmunity\Inventory\Models\OutOrder;
use Bimmunity\Inventory\Models\OutOrderItem;
use Bimmunity\Inventory\Repositories\FinanceRepository;
use App\Http\Controllers\AppBaseController;
use Bimmunity\Inventory\Repositories\InOrderRepository;
use Bimmunity\Inventory\Repositories\OutOrderRepository;
use Bimmunity\Invoice\Repositories\InvoiceRepository;
use Bimmunity\Invoice\Repositories\DocumentRepository;
use ClassPreloader\Config;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Input;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FinanceController extends AppBaseController
{
    /** @var  financeRepository */
    private $financeRepository;

    public function __construct(FinanceRepository $financeRepo)
    {
        
        $this->financeRepository = $financeRepo;
    }

    /**
     * Display a listing of the Finance.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->financeRepository->pushCriteria(new RequestCriteria($request));
        $finance = $this->financeRepository->all();

        return view('inventory::finance.index')
            ->with('finance', $finance);
    }

    /**
     * Show the form for creating a new Finance.
     *
     * @return Response
     */
    public function create()
    {
        return view('inventory::finance.create');
    }

    /**
     * Store a newly created Finance in storage.
     *
     * @param CreateFinanceRequest $request
     *
     * @return Response
     */
    public function store(CreateFinanceRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();

        $Finance = $this->financeRepository->create($input);

        Flash::success('Finance saved successfully.');

        return redirect(route('finance.index'));
    }

    /**
     * Display the specified Finance.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $finance = $this->financeRepository->findWithoutFail($id);

        if (empty($finance)) {
            Flash::error('Finance not found');

            return redirect(route('finance.index'));
        }

        return view('inventory::finance.show')->with('finance', $finance);
    }

    /**
     * Show the form for editing the specified Finance.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $finance = $this->financeRepository->findWithoutFail($id);

        if (empty($finance)) {
            Flash::error('Finance not found');

            return redirect(route('finance.index'));
        }

        return view('inventory::finance.edit')->with('finance', $finance);
    }

    /**
     * Update the specified Finance in storage.
     *
     * @param  int              $id
     * @param UpdateFinanceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFinanceRequest $request)
    {
        $finance = $this->financeRepository->findWithoutFail($id);

        if (empty($finance)) {
            Flash::error('Finance not found');

            return redirect(route('finance.index'));
        }

        $request['created_by'] = auth()->id();
        $finance = $this->financeRepository->update($request->all(), $id);

        Flash::success('Finance updated successfully.');

        return redirect(route('finance.index'));
    }

    /**
     * Remove the specified Finance from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $finance = $this->financeRepository->findWithoutFail($id);

        if (empty($finance)) {
            Flash::error('Finance not found');

            return redirect(route('finance.index'));
        }

        $this->financeRepository->delete($id);

        Flash::success('Finance deleted successfully.');

        return redirect(route('finance.index'));
    }

    public function approved_out_order_finance(Request $request )
    {
        $outOrderRepo = new OutOrderRepository(Container::getInstance());
        $outOrders = $outOrderRepo->findByField('element_status','2');
        return view('inventory::finance.sales_approve_finance')
            ->with('outOrders', $outOrders);
    }

    public function approved_out_order_finance_item($id)
    {
        $outOrderRepo = new OutOrderRepository(Container::getInstance());
        $outOrders = $outOrderRepo->findByField('element_status','2');
        return view('inventory::finance.sales_approve_finance_show')
            ->with('outOrders', $outOrders);
    }

    public function approved_in_order_finance_item($id)
    {
        $outOrderRepo = new OutOrderRepository(Container::getInstance());
        $outOrders = $outOrderRepo->findByField('element_status','2');

        //return view('inventory::out_orders.show')

        return view('inventory::finance.purchasing_approve_finance_show')
             ->with('outOrders', $outOrders);
    }

    // public function not_approved_out_order_finance(Request $request )
    // {
    //     $outOrders = $this->outOrderRepository->findByField('element_status','1');
    //     return view('inventory::out_orders.unapprove_finance')
    //         ->with('outOrders', $outOrders);
    // }

    public function approved_in_order_finance(Request $request )
    {
        $inOrderRepo = new InOrderRepository(Container::getInstance());
        //$inOrders = $this->inOrderRepository->findByField('element_status','2');
        $inOrders = $inOrderRepo->all();
        return view('inventory::finance.purchasing_approve_finance')
            ->with('inOrders', $inOrders);
    }

    public function getJson(){
        $data = InOrder::where([['status','=',3],['element_status','=',2]])
            ->orWhere([['element_status','>',3]])
            ->orwhere([['status','<>',3],['element_status','=',2]])
            ->orWhere([['status','=',3],['element_status','=',1]])
            ->get();
        foreach($data as $value){
            $value->date_required = \Carbon\Carbon::parse($value->date_required)->format('d/m/Y');
            $value->date_received = \Carbon\Carbon::parse($value->date_received)->format('d/m/Y');
            $value->companyname   = $value->company->name;
            $value->created_name  = $value->user->name;
        }
        return \response()->json($data);
    }

    public function ajax_get_approved_in_orders(){
        $data = InOrder::where([['status','=',3],['element_status','=',2]])
            ->orWhere([['element_status','>',3]])
            ->get();
        foreach($data as $value){
            $value->date_required = \Carbon\Carbon::parse($value->date_required)->format('d/m/Y');
            $value->date_received = \Carbon\Carbon::parse($value->date_received)->format('d/m/Y');
            $value->companyname   = $value->company->name;
            $value->created_name  = $value->user->name;
        }
        return \response()->json($data);
    }

    public function ajax_get_unapproved_in_orders(){
        $data = InOrder::where([['status','<>',3],['element_status','=',2]])
            ->orWhere([['status','=',3],['element_status','=',1]])
            ->get();
        foreach($data as $value){
            $value->date_required = \Carbon\Carbon::parse($value->date_required)->format('d/m/Y');
            $value->date_received = \Carbon\Carbon::parse($value->date_received)->format('d/m/Y');
            $value->companyname   = $value->company->name;
            $value->created_name  = $value->user->name;
        }
        return \response()->json($data);
    }


    public function ajax_get_approved_out_orders(){
        $data = OutOrder::where([['status','=',3],['element_status','=',2]])
            ->orWhere([['element_status','>',3]])
            ->get();
        foreach($data as $value){
            $value->date_required = \Carbon\Carbon::parse($value->date_required)->format('d/m/Y');
            $value->date_received = \Carbon\Carbon::parse($value->date_received)->format('d/m/Y');
            $value->companyname   = $value->company->name;
            $value->created_name  = $value->user->name;
        }
        return \response()->json($data);
    }

    public function ajax_get_unapproved_out_orders(){
        $data = OutOrder::where([['status','<>',3],['element_status','=',2]])
            ->orWhere([['status','=',3],['element_status','=',1]])
            ->get();
        foreach($data as $value){
            $value->date_required = \Carbon\Carbon::parse($value->date_required)->format('d/m/Y');
            $value->date_received = \Carbon\Carbon::parse($value->date_received)->format('d/m/Y');
            $value->companyname   = $value->company->name;
            $value->created_name  = $value->user->name;
        }
        return \response()->json($data);
    }

    public function finance_action($id)
    {
        $notes = '';
        if($id == 3){
            $notes =  $_REQUEST['approve_notes'];
        }else if($id == 1){
            $notes =  $_REQUEST['pending_notes'];
        }else if($id == 2){
            $notes =  $_REQUEST['refuse_notes'];
        }
        AcceptedRecords::where('related_module','=','In Order Finance')
            ->where('related_module_id','=',Input::get('order_id'))
            ->update(['active'=>0]);
        $input['accepted_by'] = auth()->id();
        $input['accepted_date'] = date("Y-m-d H:i:s");
//        $input['accepted_date'] = $input['accepted_date']->date;
        $input['related_module'] = 'In Order Finance';
        $input['related_module_id'] = Input::get('order_id');
        $input['notes'] = $notes;
        $input['status'] = $id;
        $input['active'] = 1;
        $input['created_by'] = auth()->id();
        $temp = AcceptedRecords::create($input) ;

        InOrder::where('id','=',Input::get('order_id'))
            ->update(['status'=>$id,'element_status'=>2]);

        return redirect(route('finance.approved_in_order_show',array('id'=>Input::get('order_id'))));
    }

    public function finance_action1($id)
    {
        $notes = '';
        if($id == 3){
            $notes =  $_REQUEST['approve_notes'];
            //////////////////////////////////////////////////////////////////////////////////////////////////////
            $out_order = OutOrder::where('id','=',Input::get('order_id'))->get();
            $invoice_input['user_id'] = auth()->id();
            $invoice_input['amount'] = $out_order[0]->cost;
            $invoice_input['customer_id'] = $out_order[0]->company_id;
            $invoice_input['title'] = $out_order[0]->order_number;
            $invoice_input['code'] = $out_order[0]->order_number;
            //$invoice_input['description'] = ;
            //$invoice_input['terms'] = ;
            $invoice_input['issue_date'] = date('Y-m-d H:i:s');
            $invoice_input['due_date'] = date('Y-m-d H:i:s');
            $invoice_input['total'] = $out_order[0]->cost;
            $invoice_input['discount'] = 0;
            $invoice_input['status_id'] = 1;
            $invoice_input['currency_id'] = env('CURRENCY_ID');
            $invoice_input['created_by'] = auth()->id();
            $invoice_input['updated_by'] = auth()->id();

            $invoiceRepo = new invoiceRepository(Container::getInstance(),new DocumentRepository(Container::getInstance()));
            //$invoice_input['document_id'] = $document;
            $invoice = $invoiceRepo->create($invoice_input);
            $document = $invoiceRepo->createDocument($invoice);

            // return $invoice->products()->attach($input['product_id']);

            if (!$document)
            {
                Flash::success('Invoice saved successfully, Generate invoice document faild');
            }else
                Flash::success('Invoice saved successfully.');

            //////////////////////////////////////////////////////////////////////////////////////////////////////
        }else if($id == 1){
            $notes =  $_REQUEST['pending_notes'];
        }else if($id == 2){
            $notes =  $_REQUEST['refuse_notes'];
        }
        AcceptedRecords::where('related_module','=','Out Order Finance')
            ->where('related_module_id','=',Input::get('order_id'))
            ->update(['active'=>0]);
        $input['accepted_by'] = auth()->id();
        $input['accepted_date'] = date("Y-m-d H:i:s");
//        $input['accepted_date'] = $input['accepted_date']->date;
        $input['related_module'] = 'Out Order Finance';
        $input['related_module_id'] = Input::get('order_id');
        $input['notes'] = $notes;
        $input['status'] = $id;
        $input['active'] = 1;
        $input['created_by'] = auth()->id();
        $temp = AcceptedRecords::create($input) ;

        OutOrder::where('id','=',Input::get('order_id'))
            ->update(['status'=>$id,'element_status'=>2]);

        return redirect(route('finance.approved_out_order_show',array('id'=>Input::get('order_id'))));
    }

    public function approved_in_order_show($id)
    {
        //die(print_r($id));
        $in_order = InOrder::where('id',$id)->get();

        $sales_accepted = AcceptedRecords::join('users','users.id','=','accepted_records.accepted_by','inner',false)
            ->where([['related_module','=','In Order Sales'],['related_module_id','=',$id],['active','=',1]])
            ->get();

        $finance_accepted = AcceptedRecords::join('users','users.id','=','accepted_records.accepted_by','inner',false)
            ->where([['related_module','=','In Order Finance'],['related_module_id','=',$id],['active','=',1]])
            ->get();

        $qc_accepted = AcceptedRecords::join('users','users.id','=','accepted_records.accepted_by','inner',false)
            ->where([['related_module','=','In Order Qc'],['related_module_id','=',$id],['active','=',1]])
            ->get();

        $in_order_items = InOrderItem::select('*','item_buy_price.cost as item_cost','in_order_items.cost as cost','in_order_items.quantity as quantity','stores.number as store_number','stores.name as store_name')
            ->join('in_orders','in_orders.id','=','in_order_items.order_id','inner',false)
            ->join('item_buy_price','item_buy_price.id','=','in_order_items.item_buy_price_id','inner',false)
            ->join('inventories','inventories.id','=','in_order_items.inventory_id','inner',false)
            ->join('items','items.id','=','inventories.item_id','inner',false)
            ->join('stores','stores.id','=','inventories.store_id','inner',false)
            ->where('in_orders.id',$id)
            ->get();

        return view('inventory::finance.purchasing_approve_finance_show')
            ->with('in_order', $in_order)
            ->with('sales_accepted', $sales_accepted)
            ->with('finance_accepted', $finance_accepted)
            ->with('qc_accepted', $qc_accepted)
            ->with('in_order_items', $in_order_items);
    }


    public function approved_out_order_show($id)
    {
        //die(print_r($id));
        $out_order = OutOrder::where('id',$id)->get();

        $sales_accepted = AcceptedRecords::join('users','users.id','=','accepted_records.accepted_by','inner',false)
            ->where([['related_module','=','Out Order Sales'],['related_module_id','=',$id],['active','=',1]])
            ->get();

        $finance_accepted = AcceptedRecords::join('users','users.id','=','accepted_records.accepted_by','inner',false)
            ->where([['related_module','=','Out Order Finance'],['related_module_id','=',$id],['active','=',1]])
            ->get();

        $qc_accepted = AcceptedRecords::join('users','users.id','=','accepted_records.accepted_by','inner',false)
            ->where([['related_module','=','Out Order Qc'],['related_module_id','=',$id],['active','=',1]])
            ->get();

        $out_order_items = OutOrderItem::select('*','item_costs.cost as item_cost','out_order_items.cost as cost','out_order_items.quantity as quantity','stores.number as store_number','stores.name as store_name')
            ->join('out_orders','out_orders.id','=','out_order_items.order_id','inner',false)
            ->join('item_costs','item_costs.id','=','out_order_items.item_cost_id','inner',false)
            ->join('inventories','inventories.id','=','out_order_items.inventory_id','inner',false)
            ->join('items','items.id','=','inventories.item_id','inner',false)
            ->join('stores','stores.id','=','inventories.store_id','inner',false)
            ->where('out_orders.id',$id)
            ->get();

        return view('inventory::finance.sales_approve_finance_show')
            ->with('out_order', $out_order)
            ->with('sales_accepted', $sales_accepted)
            ->with('finance_accepted', $finance_accepted)
            ->with('qc_accepted', $qc_accepted)
            ->with('out_order_items', $out_order_items);
    }

    // public function not_approved_in_order_finance(Request $request )
    // {
    //     $inOrders = $this->inOrderRepository->findByField('element_status','1');
    //     return view('inventory::in_orders.unapprove_finance')
    //         ->with('inOrders', $inOrders);
    // }

}
