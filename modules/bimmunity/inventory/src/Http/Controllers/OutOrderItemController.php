<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateOutOrderItemRequest;
use Bimmunity\Inventory\Http\Requests\UpdateOutOrderItemRequest;
use Bimmunity\Inventory\Models\Company;
use App\Http\Controllers\AppBaseController;
use Bimmunity\Inventory\Models\InOrder;
use Bimmunity\Inventory\Models\Inventory;
use Bimmunity\Inventory\Models\Item;
use Bimmunity\Inventory\Models\ItemCost;
use Bimmunity\Inventory\Models\OutOrder;
use Bimmunity\Inventory\Models\OutOrderItem;
use Bimmunity\Inventory\Models\Packing;
use Bimmunity\Inventory\Models\Store;
use App\User;
use Bimmunity\Inventory\Repositories\InOrderItemRepository;
use Bimmunity\Inventory\Repositories\InventoryRepository;
use Bimmunity\Inventory\Repositories\OutOrderItemRepository;
use Bimmunity\Inventory\Repositories\OutOrderRepository;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Input;
use Bimmunity\Ticketing\Models\Actionable;
use Bimmunity\Ticketing\Models\TicketActionStatues;
use Illuminate\Support\Facades\Session;

class OutOrderItemController extends AppBaseController
{
    /** @var  OutOrderItemRepository */
    private $outOrderItemRepository;

    public function __construct(OutOrderItemRepository $outOrderItemRepo)
    {
        
        $this->outOrderItemRepository = $outOrderItemRepo;
    }

    /**
     * Display a listing of the OutOrderItem.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->outOrderItemRepository->pushCriteria(new RequestCriteria($request));
        $outOrderItems = $this->outOrderItemRepository->all();

        return view('inventory::out_order_items.index')
            ->with('outOrderItems', $outOrderItems);
    }

    public function ajax_in_order_items()
    {

        $in_order_id = \Illuminate\Support\Facades\Input::get('in_order_id');
        $stores = InOrder::join('in_order_items','in_orders.id','=','in_order_items.order_id','inner',false)
            ->join('inventories','inventories.id','=','in_order_items.inventory_id','inner',false)
            ->join('items','items.id','=','inventories.item_id','inner',false)
            ->where('in_orders.id','=',$in_order_id)
            ->whereNull('in_orders.deleted_at')
            ->whereNull('in_order_items.deleted_at')
            ->whereNull('inventories.deleted_at')
            ->whereNull('items.deleted_at')
            ->get();
        return $stores;
    }

    public function ajax_current_item_cost()
    {

        $item_id = \Illuminate\Support\Facades\Input::get('item_id');
        $stores = ItemCost::
            where('item_id','=',$item_id)
            ->where('is_current','=',1)
            ->whereNull('deleted_at')
            ->get();
        return $stores;
    }

    /**
     * Show the form for creating a new OutOrderItem.
     *
     * @return Response
     */
    public function create()
    {
        $in_orders = InOrder::all();
        $out_orders = OutOrder::all();
        $packings  = Packing::all();
        return view('inventory::out_order_items.create')
            ->with('packings', $packings)
            ->with('in_orders', $in_orders)
            ->with('out_orders', $out_orders);
    }

    public function search_result()
    {
        $query = '';
        $temp_arr = array_filter($_REQUEST, function($value) { return $value !== '' && $value != 0; });
        if(empty($temp_arr)){
            return redirect(route('outOrderItems.search'));
        }else{
            $arr = [
                'items.name as item_name'
                ,'categories.name as item_category'
                ,'items.barcode as item_barcode'
                ,'items.description as item_description'
                ,'stores.number as item_store_number'
                ,'stores.name as item_store_name'
                ,'stores.position as item_store_position'
                ,'inventories.remains_quantity as remains_quantity'
            ];
            $first_var  = 0;
            if(isset($temp_arr['in_order'])){
                array_push(
                    $arr,
                    'item_buy_price.cost as item_buy_price'
                    ,'in_orders.order_number as in_order_number'
                    ,'in_orders.date_required as in_order_date_required'
                    ,'in_orders.date_received as in_order_date_received'
                    ,'in_orders_companies.name as in_order_company'
                    ,'in_order_items.quantity as in_order_quantity'
                );
                $first_var = 1;
                $query = DB::table('in_orders')
                    ->join('in_order_items','in_orders.id','=','in_order_items.order_id','inner',false)
                    ->join('item_buy_price','item_buy_price.id','=','in_order_items.item_buy_price_id','inner',false)
                    ->join('inventories','inventories.id','=','in_order_items.inventory_id','inner',false)
                    ->join('items','items.id','=','inventories.item_id','inner',false)
                    ->join('stores','stores.id','=','inventories.store_id','inner',false)
                    ->join('categories','categories.id','=','items.category_id','inner',false)
                    ->join('companies as in_orders_companies','in_orders_companies.id','=','in_orders.company_id','inner',false)
                    ->whereNull('in_orders.deleted_at')
                    ->whereNull('in_order_items.deleted_at')
                    ->whereNull('inventories.deleted_at')
                    ->whereNull('items.deleted_at')
                    ->whereNull('stores.deleted_at')
                    ->where('in_orders.id','=',$temp_arr["in_order"]);
            }
            if(isset($temp_arr['in_order_company'])){
                if($first_var == 0){
                    array_push(
                        $arr,
                        'item_buy_price.cost as item_buy_price'
                        ,'in_orders.order_number as in_order_number'
                        ,'in_orders.date_required as in_order_date_required'
                        ,'in_orders.date_received as in_order_date_received'
                        ,'in_orders_companies.name as in_order_company'
                        ,'in_order_items.quantity as in_order_quantity'
                    );
                    $query = DB::table('in_orders')
                        ->join('in_order_items','in_orders.id','=','in_order_items.order_id','inner',false)
                        ->join('item_buy_price','item_buy_price.id','=','in_order_items.item_buy_price_id','inner',false)
                        ->join('inventories','inventories.id','=','in_order_items.inventory_id','inner',false)
                        ->join('items','items.id','=','inventories.item_id','inner',false)
                        ->join('categories','categories.id','=','items.category_id','inner',false)
                        ->join('stores','stores.id','=','inventories.store_id','inner',false)
                        ->join('companies as in_orders_companies','in_orders_companies.id','=','in_orders.company_id','inner',false)
                        ->whereNull('in_orders.deleted_at')
                        ->whereNull('in_order_items.deleted_at')
                        ->whereNull('inventories.deleted_at')
                        ->whereNull('items.deleted_at')
                        ->whereNull('stores.deleted_at')
                        ->where('in_orders.company_id','=',$temp_arr["in_order_company"]);
                    $first_var = 1;
                }else{
                    $query = $query->where('in_orders.company_id','=',$temp_arr["in_order_company"]);
                }
            }
            if(isset($temp_arr['in_order_date_required'])){
                if($first_var == 0){
                    array_push(
                        $arr,
                        'item_buy_price.cost as item_buy_price'
                        ,'in_orders.order_number as in_order_number'
                        ,'in_orders.date_required as in_order_date_required'
                        ,'in_orders.date_received as in_order_date_received'
                        ,'in_orders_companies.name as in_order_company'
                        ,'in_order_items.quantity as in_order_quantity'
                    );
                    $query = DB::table('in_orders')
                        ->join('in_order_items','in_orders.id','=','in_order_items.order_id','inner',false)
                        ->join('item_buy_price','item_buy_price.id','=','in_order_items.item_buy_price_id','inner',false)
                        ->join('inventories','inventories.id','=','in_order_items.inventory_id','inner',false)
                        ->join('items','items.id','=','inventories.item_id','inner',false)
                        ->join('categories','categories.id','=','items.category_id','inner',false)
                        ->join('stores','stores.id','=','inventories.store_id','inner',false)
                        ->join('companies as in_orders_companies','in_orders_companies.id','=','in_orders.company_id','inner',false)
                        ->whereNull('in_orders.deleted_at')
                        ->whereNull('in_order_items.deleted_at')
                        ->whereNull('inventories.deleted_at')
                        ->whereNull('items.deleted_at')
                        ->whereNull('stores.deleted_at')
                        ->where('in_orders.date_required','=',$temp_arr["in_order_date_required"]);
                    $first_var = 1;
                }else{
                    $query = $query->where('in_orders.date_required','=',$temp_arr["in_order_date_required"]);
                }
            }
            if(isset($temp_arr['in_order_date_received'])){
                if($first_var == 0){
                    array_push(
                        $arr,
                        'item_buy_price.cost as item_buy_price'
                        ,'in_orders.order_number as in_order_number'
                        ,'in_orders.date_required as in_order_date_required'
                        ,'in_orders.date_received as in_order_date_received'
                        ,'in_orders_companies.name as in_order_company'
                        ,'in_order_items.quantity as in_order_quantity'
                    );
                    $query = DB::table('in_orders')
                        ->join('in_order_items','in_orders.id','=','in_order_items.order_id','inner',false)
                        ->join('item_buy_price','item_buy_price.id','=','in_order_items.item_buy_price_id','inner',false)
                        ->join('inventories','inventories.id','=','in_order_items.inventory_id','inner',false)
                        ->join('items','items.id','=','inventories.item_id','inner',false)
                        ->join('categories','categories.id','=','items.category_id','inner',false)
                        ->join('stores','stores.id','=','inventories.store_id','inner',false)
                        ->join('companies as in_orders_companies','in_orders_companies.id','=','in_orders.company_id','inner',false)
                        ->whereNull('in_orders.deleted_at')
                        ->whereNull('in_order_items.deleted_at')
                        ->whereNull('inventories.deleted_at')
                        ->whereNull('items.deleted_at')
                        ->whereNull('stores.deleted_at')
                        ->where('in_orders.date_received','=',$temp_arr["in_order_date_received"]);
                    $first_var = 1;
                }else{
                    $query = $query->where('in_orders.date_received','=',$temp_arr["in_order_date_received"]);
                }
            }
            if(isset($temp_arr['out_order'])){
                if($first_var == 0){
                    array_push(
                        $arr
                        ,'out_orders.order_number as out_order_number'
                        ,'out_orders.date_required as out_order_date_required'
                        ,'out_orders.date_received as out_order_date_received'
                        ,'out_orders_companies.name as out_order_company'
                        ,'out_order_items.quantity as out_order_quantity'
                        ,'out_orders.cost as out_order_cost'
                        ,'out_orders.paid as out_order_paid'
                        ,'out_orders.remains as out_order_remains'
                        ,'item_costs.cost as item_sell_price'
                    );
                    $query = DB::table('out_orders')
                        ->join('out_order_items','out_orders.id','=','out_order_items.order_id','inner',false)
                        ->join('item_costs','item_costs.id','=','out_order_items.item_cost_id','inner',false)
                        ->join('inventories','inventories.id','=','out_order_items.inventory_id','inner',false)
                        ->join('items','items.id','=','inventories.item_id','inner',false)
                        ->join('categories','categories.id','=','items.category_id','inner',false)
                        ->join('stores','stores.id','=','inventories.store_id','inner',false)
                        ->join('companies as out_orders_companies','out_orders_companies.id','=','out_orders.company_id','inner',false)
                        ->whereNull('out_orders.deleted_at')
                        ->whereNull('out_order_items.deleted_at')
                        ->whereNull('inventories.deleted_at')
                        ->whereNull('items.deleted_at')
                        ->whereNull('stores.deleted_at')
                        ->where('out_orders.id','=',$temp_arr["out_order"]);
                    $first_var = 2;
                }else{
                    array_push(
                        $arr
                        ,'out_orders.order_number as out_order_number'
                        ,'out_orders.date_required as out_order_date_required'
                        ,'out_orders.date_received as out_order_date_received'
                        ,'out_orders_companies.name as out_order_company'
                        ,'out_order_items.quantity as out_order_quantity'
                        ,'out_orders.cost as out_order_cost'
                        ,'out_orders.paid as out_order_paid'
                        ,'out_orders.remains as out_order_remains'
                        ,'item_costs.cost as item_sell_price'
                    );
                    $first_var = 3;
                    $query = $query->join('out_order_items','inventories.id','=','out_order_items.inventory_id','inner',false)
                        ->join('out_orders','out_orders.id','=','out_order_items.order_id','inner',false)
                        ->join('companies as out_orders_companies','out_orders_companies.id','=','out_orders.company_id','inner',false)
                        ->join('item_costs','item_costs.id','=','out_order_items.item_cost_id','inner',false)
                        ->whereNull('out_orders.deleted_at')
                        ->whereNull('out_order_items.deleted_at')
                        ->where('out_orders.out_orders.id','=',$temp_arr["out_order"]);
                }
            }
            if(isset($temp_arr['out_order_company'])){
                if($first_var == 0){
                    array_push(
                        $arr
                        ,'out_orders.order_number as out_order_number'
                        ,'out_orders.date_required as out_order_date_required'
                        ,'out_orders.date_received as out_order_date_received'
                        ,'out_orders_companies.name as out_order_company'
                        ,'out_order_items.quantity as out_order_quantity'
                        ,'out_orders.cost as out_order_cost'
                        ,'out_orders.paid as out_order_paid'
                        ,'out_orders.remains as out_order_remains'
                        ,'item_costs.cost as item_sell_price'
                    );
                    $query = DB::table('out_orders')
                        ->join('out_order_items','out_orders.id','=','out_order_items.order_id','inner',false)
                        ->join('item_costs','item_costs.id','=','out_order_items.item_cost_id','inner',false)
                        ->join('inventories','inventories.id','=','out_order_items.inventory_id','inner',false)
                        ->join('items','items.id','=','inventories.item_id','inner',false)
                        ->join('categories','categories.id','=','items.category_id','inner',false)
                        ->join('stores','stores.id','=','inventories.store_id','inner',false)
                        ->join('companies as out_orders_companies','out_orders_companies.id','=','out_orders.company_id','inner',false)
                        ->whereNull('out_orders.deleted_at')
                        ->whereNull('out_order_items.deleted_at')
                        ->whereNull('inventories.deleted_at')
                        ->whereNull('items.deleted_at')
                        ->whereNull('stores.deleted_at')
                        ->where('out_orders.company_id','=',$temp_arr["out_order_company"]);
                    $first_var = 2;
                }else if($first_var == 1){
                    array_push(
                        $arr
                        ,'out_orders.order_number as out_order_number'
                        ,'out_orders.date_required as out_order_date_required'
                        ,'out_orders.date_received as out_order_date_received'
                        ,'out_orders_companies.name as out_order_company'
                        ,'out_order_items.quantity as out_order_quantity'
                        ,'out_orders.cost as out_order_cost'
                        ,'out_orders.paid as out_order_paid'
                        ,'out_orders.remains as out_order_remains'
                        ,'item_costs.cost as item_sell_price'
                    );
                    $first_var = 3;
                    $query = $query->join('out_order_items','inventories.id','=','out_order_items.inventory_id','inner',false)
                        ->join('out_orders','out_orders.id','=','out_order_items.order_id','inner',false)
                        ->join('item_costs','item_costs.id','=','out_order_items.item_cost_id','inner',false)
                        ->join('companies as out_orders_companies','out_orders_companies.id','=','out_orders.company_id','inner',false)
                        ->whereNull('out_orders.deleted_at')
                        ->whereNull('out_order_items.deleted_at')
                        ->where('out_orders.company_id','=',$temp_arr["out_order_company"]);
                }else if($first_var == 2 || $first_var == 3){
                    $query = $query->where('out_orders.company_id','=',$temp_arr["out_order_company"]);
                }
            }
            if(isset($temp_arr['out_order_date_required'])){
                if($first_var == 0){
                    array_push(
                        $arr
                        ,'out_orders.order_number as out_order_number'
                        ,'out_orders.date_required as out_order_date_required'
                        ,'out_orders.date_received as out_order_date_received'
                        ,'out_orders_companies.name as out_order_company'
                        ,'out_order_items.quantity as out_order_quantity'
                        ,'out_orders.cost as out_order_cost'
                        ,'out_orders.paid as out_order_paid'
                        ,'out_orders.remains as out_order_remains'
                        ,'item_costs.cost as item_sell_price'
                    );
                    $query = DB::table('out_orders')
                        ->join('out_order_items','out_orders.id','=','out_order_items.order_id','inner',false)
                        ->join('item_costs','item_costs.id','=','out_order_items.item_cost_id','inner',false)
                        ->join('inventories','inventories.id','=','out_order_items.inventory_id','inner',false)
                        ->join('items','items.id','=','inventories.item_id','inner',false)
                        ->join('categories','categories.id','=','items.category_id','inner',false)
                        ->join('stores','stores.id','=','inventories.store_id','inner',false)
                        ->join('companies as out_orders_companies','out_orders_companies.id','=','out_orders.company_id','inner',false)
                        ->whereNull('out_orders.deleted_at')
                        ->whereNull('out_order_items.deleted_at')
                        ->whereNull('inventories.deleted_at')
                        ->whereNull('items.deleted_at')
                        ->whereNull('stores.deleted_at')
                        ->where('out_orders.date_required','=',$temp_arr["out_order_date_required"]);
                    $first_var = 2;
                }else if($first_var == 1){
                    array_push(
                        $arr
                        ,'out_orders.order_number as out_order_number'
                        ,'out_orders.date_required as out_order_date_required'
                        ,'out_orders.date_received as out_order_date_received'
                        ,'out_orders_companies.name as out_order_company'
                        ,'out_order_items.quantity as out_order_quantity'
                        ,'out_orders.cost as out_order_cost'
                        ,'out_orders.paid as out_order_paid'
                        ,'out_orders.remains as out_order_remains'
                        ,'item_costs.cost as item_sell_price'
                    );
                    $first_var = 3;
                    $query = $query->join('out_order_items','inventories.id','=','out_order_items.inventory_id','inner',false)
                        ->join('out_orders','out_orders.id','=','out_order_items.order_id','inner',false)
                        ->join('item_costs','item_costs.id','=','out_order_items.item_cost_id','inner',false)
                        ->join('companies as out_orders_companies','out_orders_companies.id','=','out_orders.company_id','inner',false)
                        ->whereNull('out_orders.deleted_at')
                        ->whereNull('out_order_items.deleted_at')
                        ->where('out_orders.date_required','=',$temp_arr["out_order_date_required"]);
                }else if($first_var == 2 || $first_var == 3){
                    $query = $query->where('out_orders.date_required','=',$temp_arr["out_order_date_required"]);
                }
            }
            if(isset($temp_arr['out_order_date_received'])){
                if($first_var == 0){
                    array_push(
                        $arr
                        ,'out_orders.order_number as out_order_number'
                        ,'out_orders.date_required as out_order_date_required'
                        ,'out_orders.date_received as out_order_date_received'
                        ,'out_orders_companies.name as out_order_company'
                        ,'out_order_items.quantity as out_order_quantity'
                        ,'out_orders.cost as out_order_cost'
                        ,'out_orders.paid as out_order_paid'
                        ,'out_orders.remains as out_order_remains'
                        ,'item_costs.cost as item_sell_price'
                    );
                    $query = DB::table('out_orders')
                        ->join('out_order_items','out_orders.id','=','out_order_items.order_id','inner',false)
                        ->join('item_costs','item_costs.id','=','out_order_items.item_cost_id','inner',false)
                        ->join('inventories','inventories.id','=','out_order_items.inventory_id','inner',false)
                        ->join('items','items.id','=','inventories.item_id','inner',false)
                        ->join('categories','categories.id','=','items.category_id','inner',false)
                        ->join('stores','stores.id','=','inventories.store_id','inner',false)
                        ->join('companies as out_orders_companies','out_orders_companies.id','=','out_orders.company_id','inner',false)
                        ->whereNull('out_orders.deleted_at')
                        ->whereNull('out_order_items.deleted_at')
                        ->whereNull('inventories.deleted_at')
                        ->whereNull('items.deleted_at')
                        ->whereNull('stores.deleted_at')
                        ->where('out_orders.date_received','=',$temp_arr["out_order_date_received"]);
                    $first_var = 2;
                }else if($first_var == 1){
                    array_push(
                        $arr
                        ,'out_orders.order_number as out_order_number'
                        ,'out_orders.date_required as out_order_date_required'
                        ,'out_orders.date_received as out_order_date_received'
                        ,'out_orders_companies.name as out_order_company'
                        ,'out_order_items.quantity as out_order_quantity'
                        ,'out_orders.cost as out_order_cost'
                        ,'out_orders.paid as out_order_paid'
                        ,'out_orders.remains as out_order_remains'
                        ,'item_costs.cost as item_sell_price'
                    );
                    $first_var = 3;
                    $query = $query->join('out_order_items','inventories.id','=','out_order_items.inventory_id','inner',false)
                        ->join('out_orders','out_orders.id','=','out_order_items.order_id','inner',false)
                        ->join('item_costs','item_costs.id','=','out_order_items.item_cost_id','inner',false)
                        ->join('companies as out_orders_companies','out_orders_companies.id','=','out_orders.company_id','inner',false)
                        ->whereNull('out_orders.deleted_at')
                        ->whereNull('out_order_items.deleted_at')
                        ->where('out_orders.date_received','=',$temp_arr["out_order_date_received"]);
                }else if($first_var == 2 || $first_var == 3){
                    $query = $query->where('out_orders.date_received','=',$temp_arr["out_order_date_received"]);
                }
            }
            if(isset($temp_arr['item'])){
                if($first_var == 0){
                    array_push(
                        $arr
                        ,'out_orders.order_number as out_order_number'
                        ,'out_orders.date_required as out_order_date_required'
                        ,'out_orders.date_received as out_order_date_received'
                        ,'out_orders_companies.name as out_order_company'
                        ,'out_order_items.quantity as out_order_quantity'
                        ,'out_orders.cost as out_order_cost'
                        ,'out_orders.paid as out_order_paid'
                        ,'out_orders.remains as out_order_remains'
                        ,'item_costs.cost as item_sell_price'
                    );
                    $query = DB::table('items')
                        ->join('inventories','items.id','=','inventories.item_id','inner',false)
                        ->join('in_order_items','inventories.id','=','in_order_items.inventory_id','inner',false)
                        ->join('item_buy_price','item_buy_price.id','=','in_order_items.item_buy_price_id','inner',false)
                        ->join('in_orders','in_orders.id','=','in_order_items.order_id','inner',false)
                        ->join('item_buy_price','item_buy_price.id','=','in_order_items.item_buy_price_id','inner',false)
                        ->join('items','items.id','=','inventories.item_id','inner',false)
                        ->join('categories','categories.id','=','items.category_id','inner',false)
                        ->join('stores','stores.id','=','inventories.store_id','inner',false)
                        ->join('out_order_items','inventories.id','=','out_order_items.inventory_id','inner',false)
                        ->join('out_orders','out_orders.id','=','out_order_items.order_id','inner',false)
                        ->join('item_costs','item_costs.id','=','out_order_items.item_cost_id','inner',false)
                        ->join('companies as out_orders_companies','out_orders_companies.id','=','out_orders.company_id','inner',false)
                        ->whereNull('in_orders.deleted_at')
                        ->whereNull('in_order_items.deleted_at')
                        ->whereNull('out_orders.deleted_at')
                        ->whereNull('out_order_items.deleted_at')
                        ->whereNull('inventories.deleted_at')
                        ->whereNull('items.deleted_at')
                        ->whereNull('stores.deleted_at')
                        ->where('items.id','=',$temp_arr["item"]);
                    $first_var = 1;
                }else{
                    $query = $query->where('items.id','=',$temp_arr["item"]);
                }
            }
            $query = $query->get($arr);
        }
        return view('inventory::out_order_items.search_result')
            ->with('data', $query);
    }

    public function search()
    {
        $companies = Company::all();
        $users = User::all();
        $in_orders = InOrder::all();
        $packings = Packing::all();
        $out_orders = OutOrder::all();
        $inventories = Inventory::all();
        $stores = Store::all();
        $items = Item::all();
        return view('inventory::out_order_items.search')
            ->with('users', $users)
            ->with('companies', $companies)
            ->with('inventories', $inventories)
            ->with('items', $items)
            ->with('stores', $stores)
            ->with('out_orders', $out_orders)
            ->with('in_orders', $in_orders)
            ->with('packings', $packings);
    }

    /**
     * Store a newly created OutOrderItem in storage.
     *
     * @param CreateOutOrderItemRequest $request
     *
     * @return Response
     */
    public function store(CreateOutOrderItemRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();

        $outOrderItem = $this->outOrderItemRepository->create($input);

        $inventory_repo = new InventoryRepository(Container::getInstance());
        $request['created_by'] = auth()->id();
        $inv_id = Input::get('inventory_id');
        $request['remains_quantity'] = floatval(Input::get('all_quantity1')) - floatval(Input::get('quantity'));
        $request['issued_quantity'] = Input::get('quantity');
        unset($request['quantity']);
        $inventory_repo->update($request->all(),$inv_id) ;
        Flash::success('Out Order Item saved successfully.');

        return redirect(route('outOrderItems.index'));
    }

    /**
     * Display the specified OutOrderItem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $outOrderItem = $this->outOrderItemRepository->findWithoutFail($id);

        if (empty($outOrderItem)) {
            Flash::error('Out Order Item not found');

            return redirect(route('outOrderItems.index'));
        }

        return view('inventory::out_order_items.show')->with('outOrderItem', $outOrderItem);
    }

    /**
     * Show the form for editing the specified OutOrderItem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $outOrderItem = $this->outOrderItemRepository->findWithoutFail($id);

        if (empty($outOrderItem)) {
            Flash::error('Out Order Item not found');

            return redirect(route('outOrderItems.index'));
        }
        $in_orders = InOrder::all();
        $out_orders = OutOrder::all();
        $packings  = Packing::all();

        return view('inventory::out_order_items.edit')
            ->with('packings', $packings)
            ->with('in_orders', $in_orders)
            ->with('out_orders', $out_orders)
            ->with('outOrderItem', $outOrderItem);
    }

    /**
     * Update the specified OutOrderItem in storage.
     *
     * @param  int              $id
     * @param UpdateOutOrderItemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOutOrderItemRequest $request)
    {
        $outOrderItem = $this->outOrderItemRepository->findWithoutFail($id);
        $inv_id = $outOrderItem->inventory_id;

        if (empty($outOrderItem)) {
            Flash::error('Out Order Item not found');

            return redirect(route('outOrderItems.index'));
        }
        $request['created_by'] = auth()->id();

        $outOrderItem = $this->outOrderItemRepository->update($request->all(), $id);

        $inventory_repo = new InventoryRepository(Container::getInstance());
        $request['created_by'] = auth()->id();
        $request['remains_quantity'] = floatval(Input::get('all_quantity1')) - floatval(Input::get('quantity'));
        $request['issued_quantity'] = Input::get('quantity');
        unset($request['quantity']);
        $inventory_repo->update($request->all(),$inv_id) ;

        Flash::success('Out Order Item updated successfully.');

        return redirect(route('outOrderItems.index'));
    }

    public function update_order_items($id)
    {
        
//        $input = $request->all();
//        $input['created_by'] = auth()->id();
//
//        $outOrderItem = $this->outOrderItemRepository->create($input);
//
//        $inventory_repo = new InventoryRepository(Container::getInstance());
//        $request['created_by'] = auth()->id();
//        $inv_id = Input::get('inventory_id');
//        $request['remains_quantity'] = floatval(Input::get('all_quantity1')) - floatval(Input::get('quantity'));
//        $request['issued_quantity'] = Input::get('quantity');
//        unset($request['quantity']);
//        $inventory_repo->update($request->all(),$inv_id) ;

        $items = OutOrderItem::where('order_id','=',$id)->get();

//        foreach ($items as $item){
//            Inventory::where('id','=',$item['inventory_id'])->delete();
//        }
        OutOrderItem::where('order_id','=',$id)->delete();
        $cost = 0;
        $counter = 1;
        while(isset($_POST['item_id_'.$counter])){
            $_POST['quantity_'.$counter] = floatval(trim($_POST['quantity_'.$counter]));
            $validator = Validator::make($_POST, [
                'quantity_'.$counter => 'required|numeric|min:1',
                'item_id_'.$counter => 'required'
            ]);
            if ($validator->fails()) {
                return redirect(route('outOrders.edit',array('id'=>$id,'items_tab'=>1)))->with('errors', $validator->messages());
            }
            $input[$counter]['item_id'] = Input::get('item_id_'.$counter);
            $input[$counter]['store_id'] = Input::get('store_'.$counter);
            $input[$counter]['quantity'] = Input::get('all_quantity_'.$counter);
            $input[$counter]['remains_quantity'] = floatval(Input::get('all_quantity_'.$counter)) - floatval(Input::get('quantity_'.$counter));
            $input[$counter]['issued_quantity'] = Input::get('quantity_'.$counter);
            $input[$counter]['created_by'] = auth()->id();
            $inv_id = Input::get('inv_id_'.$counter);
            Inventory::where('id','=',$inv_id)->update($input[$counter]) ;
            unset($input[$counter]['quantity']);
            $input[$counter]['quantity'] = Input::get('quantity_'.$counter);
            $input[$counter]['item_cost_id'] = Input::get('item_cost_id_'.$counter);
            $input[$counter]['inventory_id'] = Input::get('inv_id_'.$counter);
//            $input[$counter]['packing_id'] = Input::get('packing_'.$counter);
            $input[$counter]['order_id'] = $id;
            $input[$counter]['cost'] = Input::get('price_'.$counter);
            $cost += Input::get('price_'.$counter);
            $this->outOrderItemRepository->create($input[$counter]);
            $counter++;
        }
        $input2['cost'] = $cost;

        $outOrderItemRepo = new OutOrderRepository(Container::getInstance());
        $outOrderItemRepo->update($input2, $id);
        Flash::success('Out Order Item updated successfully.');
        if(! isset( $_POST['ticket_id'])){
           
            return redirect(route('outOrders.index'));
        }
       else
       {
           Actionable::create(['ticket_action_id'=>$_POST['action_id'],'ticket_id'=>$_POST['ticket_id'],'actionable_type'=>OutOrder::class,'actionable_id'=>$id]);
           return redirect('/tickets/'.$_POST['ticket_id']);
       }

        

        
    }
    /**
     * Remove the specified OutOrderItem from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $outOrderItem = $this->outOrderItemRepository->findWithoutFail($id);

        if (empty($outOrderItem)) {
            Flash::error('Out Order Item not found');

            return redirect(route('outOrderItems.index'));
        }

        $this->outOrderItemRepository->delete($id);

        Flash::success('Out Order Item deleted successfully.');

        return redirect(route('outOrderItems.index'));
    }
}
