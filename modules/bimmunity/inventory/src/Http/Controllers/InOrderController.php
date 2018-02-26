<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateInOrderRequest;
use Bimmunity\Inventory\Http\Requests\UpdateInOrderRequest;
use Bimmunity\Inventory\Models\AcceptedRecords;
use Bimmunity\Inventory\Models\Company;
use Bimmunity\Inventory\Models\InOrder;
use Bimmunity\Inventory\Models\InOrderItem;
use Bimmunity\Inventory\Models\Inventory;
use Bimmunity\Inventory\Models\Item;
use Bimmunity\Inventory\Models\Store;
use App\User;
use Bimmunity\Inventory\Repositories\InOrderItemRepository;
use Bimmunity\Inventory\Repositories\InOrderRepository;
use App\Http\Controllers\AppBaseController;
use Bimmunity\Invoice\Models\Vendor;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Prettus\Repository\Criteria\RequestCriteria;
use Bimmunity\Ticketing\Models\TicketActionStatues;
use Bimmunity\Ticketing\Models\TicketAction;
use Illuminate\Support\Facades\Session;
use Response;

class InOrderController extends AppBaseController
{
    /** @var  InOrderRepository */
    private $inOrderRepository;

    public function __construct(InOrderRepository $inOrderRepo)
    {
        
        $this->inOrderRepository = $inOrderRepo;
    }

    /**
     * Display a listing of the InOrder.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->inOrderRepository->pushCriteria(new RequestCriteria($request));
        $inOrders = $this->inOrderRepository->all();

        return view('inventory::in_orders.index')
            ->with('inOrders', $inOrders);
    }

    /**
     * Show the form for creating a new InOrder.
     *
     * @return Response
     */
    public function create()
    {
        $items_tab = 0;
        if(isset($_GET['items_tab'])){
            $items_tab = 1;
        }
        $companies = Vendor::all();
        $users = User::all();
//        $inOrder = $this->inOrderRepository->findWithoutFail($id);

        $inOrderItemRepo = new InOrderItemRepository(Container::getInstance());
        //$inOrderItem = $inOrderItemRepo->findWithoutFail($id);
        $in_orders = $this->inOrderRepository->all();
        $inventories = Inventory::all();
        $stores = Store::all();
        $items = Item::all();
        if((Session::get('ticket_id'))){
            return view('inventory::in_orders.create')
            ->with('users', $users)
            ->with('companies', $companies)
            ->with('inventories', $inventories)
            ->with('items', $items)
            ->with('stores', $stores)
            ->with('in_orders', $in_orders)
            ->with('items_tab', $items_tab)
            ->with(['ticket_id'=>Session::get('ticket_id'),'action_id'=>Session::get('action_id')]);
        }
        return view('inventory::in_orders.create')
            ->with('users', $users)
            ->with('companies', $companies)
            ->with('inventories', $inventories)
            ->with('items', $items)
            ->with('stores', $stores)
            ->with('in_orders', $in_orders)
            ->with('items_tab', $items_tab);
    }

    /**
     * Store a newly created InOrder in storage.
     *
     * @param CreateInOrderRequest $request
     *
     * @return Response
     */
    public function store(CreateInOrderRequest $request)
    {
        $input = $request->all();
        $input['cost'] = 0;
        $input['created_by'] = auth()->id();

        $inOrder = $this->inOrderRepository->create($input);

        Flash::success('In Order saved successfully.');
        if(! isset($input['ticket_id']))
        {
            return redirect(route('inOrders.edit',array('id'=>$inOrder->id,'items_tab'=>1)));
        }
        else
        {
            return redirect(route('inOrders.edit',array('id'=>$inOrder->id,'items_tab'=>1,'ticket_id'=>$input['ticket_id'],'action_id'=>$input['action_id'])));
        }
            //return redirect(route('inOrders.index'));
            
    }

    /**
     * Display the specified InOrder.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inOrder = $this->inOrderRepository->findWithoutFail($id);

        $sales_accepted = AcceptedRecords::join('users','users.id','=','accepted_records.accepted_by','inner',false)
            ->where([['related_module','=','In Order Sales'],['related_module_id','=',$id],['active','=',1]])
            ->get();

        $finance_accepted = AcceptedRecords::join('users','users.id','=','accepted_records.accepted_by','inner',false)
            ->where([['related_module','=','In Order Finance'],['related_module_id','=',$id],['active','=',1]])
            ->get();

        $qc_accepted = AcceptedRecords::join('users','users.id','=','accepted_records.accepted_by','inner',false)
            ->where([['related_module','=','In Order Qc'],['related_module_id','=',$id],['active','=',1]])
            ->get();

        $order_items = InOrderItem::select('*','in_orders.id as id','item_buy_price.cost as item_cost','in_order_items.cost as cost','in_order_items.quantity as quantity','stores.number as store_number','stores.name as store_name')
            ->join('in_orders','in_orders.id','=','in_order_items.order_id','inner',false)
            ->join('item_buy_price','item_buy_price.id','=','in_order_items.item_buy_price_id','inner',false)
            ->join('inventories','inventories.id','=','in_order_items.inventory_id','inner',false)
            ->join('items','items.id','=','inventories.item_id','inner',false)
            ->join('stores','stores.id','=','inventories.store_id','inner',false)
            ->where('in_orders.id','=',$id)
            ->get();

        if (empty($inOrder)) {
            Flash::error('In Order not found');

            return redirect(route('inOrders.index'));
        }

        return view('inventory::in_orders.show')
            ->with('order_items', $order_items)
            ->with('sales_accepted', $sales_accepted)
            ->with('finance_accepted', $finance_accepted)
            ->with('qc_accepted', $qc_accepted)
            ->with('inOrder', $inOrder);
    }

    /**
     * Show the form for editing the specified InOrder.
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

        $companies = Vendor::all();
        $users = User::all();
        $inOrder = $this->inOrderRepository->findWithoutFail($id);

        $inOrderItemRepo = new InOrderItemRepository(Container::getInstance());
        //$inOrderItem = $inOrderItemRepo->findWithoutFail($id);
        $in_orders = $this->inOrderRepository->all();
        $inventories = Inventory::all();
        $stores = Store::all();
        $items = Item::all();
        $order_items = InOrderItem::select('*','item_buy_price.cost as item_cost','in_order_items.cost as cost')
                        ->join('item_buy_price','item_buy_price.id','=','in_order_items.item_buy_price_id','inner',false)
                        ->where('order_id',$id)
                        ->get();//$inOrderItemRepo->findByField('order_id',$id);
//        echo"<pre>";
//        print_r($id);
//        die(print_r($order_items));

        if (empty($inOrder)) {
            Flash::error('In Order not found');

            return redirect(route('inOrders.index'));
        }

        return view('inventory::in_orders.edit')
            ->with('users', $users)
            ->with('companies', $companies)
            ->with('inventories', $inventories)
            ->with('items', $items)
            ->with('stores', $stores)
            ->with('in_orders', $in_orders)
            //->with('inOrderItem', $inOrderItem)
            ->with('inOrder', $inOrder)
            ->with('items_tab', $items_tab)
            ->with('order_items', $order_items);
    }

    /**
     * Update the specified InOrder in storage.
     *
     * @param  int              $id
     * @param UpdateInOrderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInOrderRequest $request)
    {

        $inOrder = $this->inOrderRepository->findWithoutFail($id);

        if (empty($inOrder)) {
            Flash::error('In Order not found');

            return redirect(route('inOrders.index'));
        }
        $request['created_by'] = auth()->id();

        $inOrder = $this->inOrderRepository->update($request->all(), $id);

        Flash::success('In Order updated successfully.');

        //return redirect(route('inOrders.index'));
        return redirect(route('inOrders.edit',array('id'=>$id,'items_tab'=>1)));
    }

    /**
     * Remove the specified InOrder from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inOrder = $this->inOrderRepository->findWithoutFail($id);

        if (empty($inOrder)) {
            Flash::error('In Order not found');

            return redirect(route('inOrders.index'));
        }

        $this->inOrderRepository->delete($id);

        Flash::success('In Order deleted successfully.');

        return redirect(route('inOrders.index'));
    }

    public function ajax_get_approved_in_orders(){
        $data = InOrder::where([['status','=',3],['element_status','=',1]])
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

    public function ajax_get_unapproved_in_orders(){
        $data = InOrder::where([['status','=',0]])
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
        AcceptedRecords::where('related_module','=','In Order Sales')
            ->where('related_module_id','=',Input::get('order_id'))
            ->update(['active'=>0]);
        $input['accepted_by'] = auth()->id();
        $input['accepted_date'] = date("Y-m-d H:i:s");
        //        $input['accepted_date'] = $input['accepted_date']->date;
        $input['related_module'] = 'In Order Sales';
        $input['related_module_id'] = Input::get('order_id');
        $input['notes'] = $notes;
        $input['status'] = $id;
        $input['active'] = 1;
        $input['created_by'] = auth()->id();
        $temp = AcceptedRecords::create($input) ;

        InOrder::where('id','=',Input::get('order_id'))
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
        return redirect(route('inOrders.show',array('id'=>Input::get('order_id'))));
    }
    public function showFromTicket($id,$ticket_id,$action_id)
    {
        $action = TicketAction::find($action_id);
        $status = $action->next_status($ticket_id);
        return $this->show($id)->with('ticket_id',$ticket_id)->with('action_id',$action_id)->with('status',$status);
    }
}