<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateOutOrderRequest;
use Bimmunity\Inventory\Http\Requests\UpdateOutOrderRequest;
use Bimmunity\Inventory\Models\AcceptedRecords;
use Bimmunity\Inventory\Models\Company;
use Bimmunity\Inventory\Models\Inventory;
use Bimmunity\Inventory\Models\Item;
use Bimmunity\Inventory\Models\OutOrder;
use Bimmunity\Inventory\Models\OutOrderItem;
use Bimmunity\Inventory\Models\Packing;
use Bimmunity\Inventory\Models\Store;
use App\User;
use Bimmunity\Inventory\Repositories\InOrderItemRepository;
use Bimmunity\Inventory\Repositories\InOrderRepository;
use Bimmunity\Inventory\Repositories\OutOrderItemRepository;
use Bimmunity\Inventory\Repositories\OutOrderRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Session;
use Bimmunity\Ticketing\Models\TicketActionStatues;

class OutOrderController extends AppBaseController
{
    /** @var  OutOrderRepository */
    private $outOrderRepository;

    public function __construct(OutOrderRepository $outOrderRepo)
    {
        
        $this->outOrderRepository = $outOrderRepo;
    }

    /**
     * Display a listing of the OutOrder.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->outOrderRepository->pushCriteria(new RequestCriteria($request));
        $outOrders = $this->outOrderRepository->all();

        return view('inventory::out_orders.index')
            ->with('outOrders', $outOrders);
    }

    /**
     * Show the form for creating a new OutOrder.
     *
     * @return Response
     */
    public function create()
    {
        $items_tab = 0;
        if(isset($_GET['items_tab'])){
            $items_tab = 1;
        }
        $companies = Company::all();
        $users = User::all();
        $inOrderItemRepo = new InOrderItemRepository(Container::getInstance());
        //$inOrderItem = $inOrderItemRepo->findWithoutFail($id);
        $in_orders = $inOrderItemRepo->all();
        $packings = Packing::all();
        $out_orders = $this->outOrderRepository->all();
        $inventories = Inventory::all();
        $stores = Store::all();
        $items = Item::all();
        if((Session::get('ticket_id'))){
            return view('inventory::out_orders.create')
            ->with('users', $users)
            ->with('companies', $companies)
            ->with('inventories', $inventories)
            ->with('items', $items)
            ->with('stores', $stores)
            ->with('out_orders', $out_orders)
            ->with('in_orders', $in_orders)
            ->with('packings', $packings)
            ->with('items_tab', $items_tab)
            ->with(['ticket_id'=>Session::get('ticket_id'),'action_id'=>Session::get('action_id')]);
        }

        return view('inventory::out_orders.create')
            ->with('users', $users)
            ->with('companies', $companies)
            ->with('inventories', $inventories)
            ->with('items', $items)
            ->with('stores', $stores)
            ->with('out_orders', $out_orders)
            ->with('in_orders', $in_orders)
            ->with('packings', $packings)
            ->with('items_tab', $items_tab);
    }

    /**
     * Store a newly created OutOrder in storage.
     *
     * @param CreateOutOrderRequest $request
     *
     * @return Response
     */
    public function store(CreateOutOrderRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'date_received' => 'required',
            'order_number' => 'required',
            'date_required' => 'required'//|min:8',
//            'email' => 'required|email|unique:users'
        ]);
        if ($validator->fails()) {
            return redirect(route('outOrders.create'))->with('errors',$validator->messages());
        } else {

            $input = $request->all();
            $input['cost'] = 0;
            $input['created_by'] = auth()->id();

            $outOrder = $this->outOrderRepository->create($input);
            if(! isset($input['ticket_id'])){

                Flash::success('Out Order saved successfully.');
                //return redirect(route('outOrders.index'));
                return redirect(route('outOrders.edit', array('id' => $outOrder->id, 'items_tab' => 1)));            }
           else
           {
                Flash::success('Out Order saved successfully.');
                return redirect(route('outOrders.edit', array('id' => $outOrder->id, 'items_tab' => 1,'ticket_id'=>$input['ticket_id'],'action_id'=>$input['action_id'])));
           }
            
        }
    }

    public function ajax_get_approved_out_orders(){
        $data = OutOrder::where([['status','=',3],['element_status','=',1]])
            ->orWhere([['element_status','>',1]])
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
        $data = OutOrder::where([['status','=',0]])
            ->orWhere([['status','=',2]])
            ->get();
        foreach($data as $value){
            $value->date_required = \Carbon\Carbon::parse($value->date_required)->format('d/m/Y');
            $value->date_received = \Carbon\Carbon::parse($value->date_received)->format('d/m/Y');
            $value->companyname   = $value->company->name;
            $value->created_name  = $value->user->name;
        }
        return \response()->json($data);
    }

    /**
     * Display the specified OutOrder.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $outOrder = $this->outOrderRepository->findWithoutFail($id);

        $sales_accepted = AcceptedRecords::join('users','users.id','=','accepted_records.accepted_by','inner',false)
            ->where([['related_module','=','Out Order Sales'],['related_module_id','=',$id],['active','=',1]])
            ->get();

        $finance_accepted = AcceptedRecords::join('users','users.id','=','accepted_records.accepted_by','inner',false)
            ->where([['related_module','=','Out Order Finance'],['related_module_id','=',$id],['active','=',1]])
            ->get();

        $qc_accepted = AcceptedRecords::join('users','users.id','=','accepted_records.accepted_by','inner',false)
            ->where([['related_module','=','Out Order Qc'],['related_module_id','=',$id],['active','=',1]])
            ->get();

        $order_items = OutOrderItem::select('*','out_orders.id as id','item_costs.cost as item_cost','out_order_items.cost as cost','out_order_items.quantity as quantity','stores.number as store_number','stores.name as store_name')
            ->join('out_orders','out_orders.id','=','out_order_items.order_id','inner',false)
            ->join('item_costs','item_costs.id','=','out_order_items.item_cost_id','inner',false)
            ->join('inventories','inventories.id','=','out_order_items.inventory_id','inner',false)
            ->join('items','items.id','=','inventories.item_id','inner',false)
            ->join('stores','stores.id','=','inventories.store_id','inner',false)
            ->where('out_orders.id','=',$id)
            ->get();


        if (empty($outOrder)) {
            Flash::error('Out Order not found');

            return redirect(route('outOrders.index'));
        }

        return view('inventory::out_orders.show')
            ->with('order_items', $order_items)
            ->with('sales_accepted', $sales_accepted)
            ->with('finance_accepted', $finance_accepted)
            ->with('qc_accepted', $qc_accepted)
            ->with('outOrder', $outOrder);
    }

    /**
     * Show the form for editing the specified OutOrder.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $items_tab = 0;
        if(isset($_GET['items_tab'])){
            $items_tab = 1;
        }
        $outOrder = $this->outOrderRepository->findWithoutFail($id);
        $users = User::all();

        $inOrderItemRepo = new InOrderItemRepository(Container::getInstance());
        $inOrderRepo = new InOrderRepository(Container::getInstance());
        $outOrderItemRepo = new OutOrderItemRepository(Container::getInstance());
        //$inOrderItem = $inOrderItemRepo->findWithoutFail($id);
        $out_orders = $this->outOrderRepository->all();
        $in_orders = $inOrderRepo->all();
        $inventories = Inventory::all();
        $stores = Store::all();
        $items = Item::all();
        $packings = Packing::all();
        $order_items = OutOrderItem::select('in_orders.id as in_order_id', 'out_order_items.order_id as out_order_id', 'out_orders.order_number as out_orders_order_number', 'in_orders.order_number as in_orders_order_number', 'items.barcode as barcode',  'inventories.store_id as store', 'in_order_items.inventory_id as inventory_id', 'inventories.item_id as item_id', 'out_order_items.quantity as quantity')
            //'out_order_items.packing_id as packing'
            ->join('inventories','inventories.id','=','out_order_items.inventory_id','inner',false)
            ->join('items','inventories.item_id','=','items.id','inner',false)
            ->join('in_order_items','inventories.id','=','in_order_items.inventory_id','inner',false)
            ->join('in_orders','in_orders.id','=','in_order_items.order_id','inner',false)
            ->join('out_orders','out_orders.id','=','out_order_items.order_id','inner',false)
//            ->join('packings','packings.id','=','out_order_items.packing_id','inner',false)
            ->where('out_order_items.order_id','=',$id)
            ->whereNull('in_orders.deleted_at')
            ->whereNull('in_order_items.deleted_at')
            ->whereNull('out_order_items.deleted_at')
            ->whereNull('inventories.deleted_at')
            ->whereNull('items.deleted_at')
            ->get();
        //$outOrderItemRepo->findByField('order_id',$id);

        if (empty($outOrder)) {
            Flash::error('Out Order not found');

            return redirect(route('outOrders.index'));
        }
        $companies = Company::all();

        return view('inventory::out_orders.edit')
            ->with('companies', $companies)
            ->with('outOrder', $outOrder)
            ->with('users', $users)
            ->with('companies', $companies)
            ->with('inventories', $inventories)
            ->with('items', $items)
            ->with('stores', $stores)
            ->with('out_orders', $out_orders)
            ->with('in_orders', $in_orders)
            ->with('items_tab', $items_tab)
            ->with('packings', $packings)
            ->with('order_items', $order_items);
    }

    /**
     * Update the specified OutOrder in storage.
     *
     * @param  int              $id
     * @param UpdateOutOrderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOutOrderRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'date_received' => 'required',
            'order_number' => 'required',
            'date_required' => 'required'//|min:8',
//            'email' => 'required|email|unique:users'
        ]);
        if ($validator->fails()) {
            return redirect(route('outOrders.edit', array('id' => $id)))->with('errors', $validator->messages());
        } else {
            $outOrder = $this->outOrderRepository->findWithoutFail($id);

            if (empty($outOrder)) {
                Flash::error('Out Order not found');

                return redirect(route('outOrders.index'));
            }
            $request['created_by'] = auth()->id();

            $outOrder = $this->outOrderRepository->update($request->all(), $id);

            Flash::success('Out Order updated successfully.');

            //return redirect(route('outOrders.index'));
            return redirect(route('outOrders.edit', array('id' => $id, 'items_tab' => 1)));
        }
    }


    /**
     * Remove the specified OutOrder from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $outOrder = $this->outOrderRepository->findWithoutFail($id);

        if (empty($outOrder)) {
            Flash::error('Out Order not found');

            return redirect(route('outOrders.index'));
        }

        $this->outOrderRepository->delete($id);

        Flash::success('Out Order deleted successfully.');

        return redirect(route('outOrders.index'));
    }

    public function sales_action($id)
    {
        $notes = '';
        if($id == 3){
            $notes =  $_REQUEST['approve_notes'];
        }else if($id == 1){
            $notes =  $_REQUEST['pending_notes'];
        }else if($id == 2){
            $notes =  $_REQUEST['refuse_notes'];
        }
        AcceptedRecords::where('related_module','=','Out Order Sales')
            ->where('related_module_id','=',Input::get('order_id'))
            ->update(['active'=>0]);
        $input['accepted_by'] = auth()->id();
        $input['accepted_date'] = date("Y-m-d H:i:s");
        //        $input['accepted_date'] = $input['accepted_date']->date;
        $input['related_module'] = 'Out Order Sales';
        $input['related_module_id'] = Input::get('order_id');
        $input['notes'] = $notes;
        $input['status'] = $id;
        $input['active'] = 1;
        $input['created_by'] = auth()->id();
        $temp = AcceptedRecords::create($input) ;

        OutOrder::where('id','=',Input::get('order_id'))
            ->update(['status'=>$id,'element_status'=>1]);
            if(Input::get('ticket_id'))
            {
                if($id == 3)
                {
                    $status = TicketActionStatues::where(['ticket_action_id'=>Input::get('action_id'),'ticket_id'=>Input::get('ticket_id')])->first();
                    if($status)
                    {
                        $status->update(['status'=>1]);
                    }
                    else
                    {
        
                        TicketActionStatues::create(['ticket_action_id'=>Input::get('action_id'),'ticket_id'=>Input::get('ticket_id'),'status'=>1]);
                    }
                }
                else
                {    
                    $status = TicketActionStatues::where(['ticket_action_id'=>Input::get('action_id'),'ticket_id'=>Input::get('ticket_id')])->first();
                    if($status)
                    {
                        $status->update(['status'=>0]);
                    }
                    else
                    {
                        TicketActionStatues::create(['ticket_action_id'=>Input::get('action_id'),'ticket_id'=>Input::get('ticket_id'),'status'=>0]);
                    }
                }
                return redirect()->to('/tickets/'.Input::get('ticket_id'));
            }
        return redirect(route('outOrders.show',array('id'=>Input::get('order_id'))));
    }
    public function showFromTicket($id,$ticket_id,$action_id)
    {
        return $this->show($id)->with('ticket_id',$ticket_id)->with('action_id',$action_id);
    }
}
