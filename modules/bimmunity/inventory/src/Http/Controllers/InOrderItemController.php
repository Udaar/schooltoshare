<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateInOrderItemRequest;
use Bimmunity\Inventory\Http\Requests\UpdateInOrderItemRequest;
use Bimmunity\Inventory\Models\InOrder;
use Bimmunity\Inventory\Models\InOrderItem;
use Bimmunity\Inventory\Models\Inventory;
use Bimmunity\Inventory\Models\Item;
use Bimmunity\Inventory\Models\ItemBuyPrice;
use Bimmunity\Inventory\Models\Store;
use Bimmunity\Inventory\Repositories\InOrderItemRepository;
use Bimmunity\Inventory\Repositories\InOrderRepository;
use Bimmunity\Inventory\Repositories\InventoryRepository;
use App\Http\Controllers\AppBaseController;
use Bimmunity\Invoice\Models\Currency;
use Bimmunity\Invoice\Models\ExpensesType;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Laracasts\Flash\Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Session;
use Bimmunity\Ticketing\Models\Actionable;
use Bimmunity\Ticketing\Models\TicketActionStatues;
use Response;

class InOrderItemController extends AppBaseController
{
    /** @var  InOrderItemRepository */
    private $inOrderItemRepository;

    public function __construct(InOrderItemRepository $inOrderItemRepo)
    {
        
        $this->inOrderItemRepository = $inOrderItemRepo;
    }

    /**
     * Display a listing of the InOrderItem.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->inOrderItemRepository->pushCriteria(new RequestCriteria($request));
        $inOrderItems = $this->inOrderItemRepository->all();

        return view('inventory::in_order_items.index')
            ->with('inOrderItems', $inOrderItems);
    }

    /**
     * Show the form for creating a new InOrderItem.
     *
     * @return Response
     */
    public function create()
    {
        $in_orders = InOrder::all();
        $inventories = Inventory::all();
        $stores = Store::all();
        $items = Item::all();
        return view('inventory::in_order_items.create')
            ->with('inventories', $inventories)
            ->with('items', $items)
            ->with('stores', $stores)
            ->with('in_orders', $in_orders);
    }
    /**
     * Store a newly created InOrderItem in storage.
     *
     * @param CreateInOrderItemRequest $request
     *
     * @return Response
     */
    public function store(CreateInOrderItemRequest $request)
    {
        $input['item_id'] = Input::get('Item');
        $input['store_id'] = Input::get('Store');
        $input['quantity'] = Input::get('quantity');
        $input['remains_quantity'] = Input::get('quantity');
        $input['created_by'] = auth()->id();
        $inventory_id = Inventory::create($input) ;
        //$stores = Inventory::where('item_id','=',$item_id)->where('store_id','=',$store_id)->get();

        $input = $request->all();
        $input['created_by'] = auth()->id();
        $input['inventory_id'] = $inventory_id->id;

        $inOrderItem = $this->inOrderItemRepository->create($input);

        Flash::success('In Order Item saved successfully.');

        return redirect(route('inOrderItems.index'));
    }

    /**
     * Display the specified InOrderItem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inOrderItem = $this->inOrderItemRepository->findWithoutFail($id);

        if (empty($inOrderItem)) {
            Flash::error('In Order Item not found');

            return redirect(route('inOrderItems.index'));
        }

        return view('inventory::in_order_items.show')->with('inOrderItem', $inOrderItem);
    }

    /**
     * Show the form for editing the specified InOrderItem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inOrderItem = $this->inOrderItemRepository->findWithoutFail($id);
        $in_orders = InOrder::all();
        $inventories = Inventory::all();
        $stores = Store::all();
        $items = Item::all();

        if (empty($inOrderItem)) {
            Flash::error('In Order Item not found');

            return redirect(route('inOrderItems.index'));
        }

        return view('inventory::in_order_items.edit')
            ->with('inventories', $inventories)
            ->with('items', $items)
            ->with('stores', $stores)
            ->with('in_orders', $in_orders)
            ->with('inOrderItem', $inOrderItem);
    }

    /**
     * Update the specified InOrderItem in storage.
     *
     * @param  int              $id
     * @param UpdateInOrderItemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInOrderItemRequest $request)
    {
        $inOrderItem = $this->inOrderItemRepository->findWithoutFail($id);
        $inv_id = $inOrderItem->inventory_id;
        if (empty($inOrderItem)) {
            Flash::error('In Order Item not found');

            return redirect(route('inOrderItems.index'));
        }
        //$container = new Container();
        $inventory_repo = new InventoryRepository(Container::getInstance());
        $request['created_by'] = auth()->id();
        $request['item_id'] = Input::get('Item');
        $request['store_id'] = Input::get('Store');
        $request['quantity'] = Input::get('quantity');
        $input['remains_quantity'] = Input::get('quantity');
        $inventory_repo->update($request->all(),$inv_id) ;

        $inOrderItem = $this->inOrderItemRepository->update($request->all(), $id);

        Flash::success('In Order Item updated successfully.');

        return redirect(route('inOrderItems.index'));
    }


    public function ajax_current_item_cost()
    {

        $item_id = Input::get('item_id');
        $stores = ItemBuyPrice::
        where('item_id','=',$item_id)
            ->where('is_current','=',1)
            ->whereNull('deleted_at')
            ->get();
        return $stores;
    }

    public function update_order_items($id)
    {
        $items = InOrderItem::where('order_id','=',$id)->get();

        foreach ($items as $item){
            Inventory::where('id','=',$item['inventory_id'])->delete();
        }
        InOrderItem::where('order_id','=',$id)->delete();
        $cost = 0;
        $counter = 1;

        while(isset($_POST['item_id_'.$counter])){
            $_POST['quantity_'.$counter] = floatval(trim($_POST['quantity_'.$counter]));
            $validator = Validator::make($_POST, ['quantity_'.$counter => 'required|numeric|min:1']);
            if ($validator->fails()) {
                return redirect(route('inOrders.edit',array('id'=>$id,'items_tab'=>1)))->with('errors', $validator->messages());
            }
            $input[$counter]['item_id'] = Input::get('item_id_'.$counter);
            $input[$counter]['store_id'] = Input::get('store_'.$counter);
            $input[$counter]['quantity'] = Input::get('quantity_'.$counter);
            $input[$counter]['remains_quantity'] = Input::get('quantity_'.$counter);
            $input[$counter]['created_by'] = auth()->id();
            $temp = Inventory::create($input[$counter]) ;
            $input[$counter]['inventory_id'] = $temp->id;
            $input[$counter]['item_buy_price_id'] = Input::get('item_cost_id_'.$counter);
            $input[$counter]['order_id'] = $id;
            $input[$counter]['cost'] = Input::get('price_'.$counter);
            $cost += Input::get('price_'.$counter);
            $this->inOrderItemRepository->create($input[$counter]);
            $counter++;
        }
        $input2['cost'] = $cost;

        $inOrderItemRepo = new inOrderRepository(Container::getInstance());
        $inOrderItemRepo->update($input2, $id);

        Flash::success('In Order Item updated successfully.');
        if(! isset( $_POST['ticket_id'])){
            
            return redirect(route('inOrders.index'));
         }
        else
        {
            Actionable::create(['ticket_action_id'=>$_POST['action_id'],'ticket_id'=>$_POST['ticket_id'],'actionable_type'=>InOrder::class,'actionable_id'=>$id]);
            return redirect('/tickets/'.$_POST['ticket_id']);
        }
       
    }
    /**
     * Remove the specified InOrderItem from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inOrderItem = $this->inOrderItemRepository->findWithoutFail($id);

        if (empty($inOrderItem)) {
            Flash::error('In Order Item not found');

            return redirect(route('inOrderItems.index'));
        }

        $this->inOrderItemRepository->delete($id);

        Flash::success('In Order Item deleted successfully.');

        return redirect(route('inOrderItems.index'));
    }
}
