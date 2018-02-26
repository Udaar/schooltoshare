<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateItemRequest;
use Bimmunity\Inventory\Http\Requests\UpdateItemRequest;
use App\Models\Category;
use Bimmunity\Inventory\Models\InOrderItem;
use Bimmunity\Inventory\Models\Inventory;
use Bimmunity\Inventory\Models\OutOrderItem;
use Bimmunity\Inventory\Repositories\ItemRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Validator;

class ItemController extends AppBaseController
{
    /** @var  ItemRepository */
    private $itemRepository;

    public function __construct(ItemRepository $itemRepo)
    {
        
        $this->itemRepository = $itemRepo;
    }

    /**
     * Display a listing of the Item.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->itemRepository->pushCriteria(new RequestCriteria($request));
        $items = $this->itemRepository->all();
        return view('inventory::items.index')
            ->with('items', $items);
    }

    /**
     * Show the form for creating a new Item.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('inventory::items.create')
            ->with('categories', $categories);
    }

    /**
     * Store a newly created Item in storage.
     *
     * @param CreateItemRequest $request
     *
     * @return Response
     */
    public function store(CreateItemRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'barcode' => 'unique:items'
        ]);
        if ($validator->fails()) {
            return redirect(route('items.create'))->with('errors',$validator->messages());
        } else {
            $input = $request->all();
            $input['created_by'] = auth()->id();

            $item = $this->itemRepository->create($input);

            Flash::success('Item saved successfully.');

            return redirect(route('items.index'));
        }
    }

    /**
     * Display the specified Item.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $item = $this->itemRepository->findWithoutFail($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }
        $inventory_data = Inventory::where('item_id','=',$item->id)->get();
        if($inventory_data->isEmpty()){
            return view('inventory::items.show')->with('item', $item);
        }else {
            $purchase_orders =[];
            $sales_orders =[];
            $sales_order_counter = 0;
            foreach ($inventory_data as $inv_record) {
                $purchase_orders[$inv_record->id] = InOrderItem::where('inventory_id', '=', $inv_record->id)->join('in_orders', 'in_orders.id', '=', 'in_order_items.order_id', 'inner', false)->get();
                $sales_orders[$sales_order_counter++]  = OutOrderItem::select('out_orders.order_number','companies.name','out_order_items.quantity','item_costs.cost','out_order_items.cost as total_cost','out_orders.created_at')
                    ->where('inventory_id', '=', $inv_record->id)
                    ->join('out_orders', 'out_orders.id', '=', 'out_order_items.order_id', 'inner', false)
                    ->join('item_costs', 'item_costs.id', '=', 'out_order_items.item_cost_id', 'inner', false)
                    ->join('companies', 'out_orders.company_id', '=', 'companies.id', 'inner', false)
                    ->get();
            }
//            echo "<pre>";
//            print_r('<br />');
//            print_r($inventory_data);
//            print_r('<br />');
//            print_r($purchase_order);
//            print_r('<br />');
//            print_r($sales_order);
//            print_r('<br />');
//            die('atef');
            return view('inventory::items.show')
                ->with('item', $item)
                ->with('inventory_data', $inventory_data)
                ->with('purchase_orders', $purchase_orders)
                ->with('sales_orders', $sales_orders);
        }
//        $inventory_repo = new InventoryRepository(Container::getInstance());
//        $inventory_repo->findWithoutFail($item->id);
        //$item->
    }

    public function item_overview($id)
    {
        $item = $this->itemRepository->findWithoutFail($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.item_overview'));
        }

        return view('inventory::items.show_fields_overview')->with('item', $item);
    }

    public function item_history()
    {
        return view('inventory::items.show_fields_history');//->with('item', $item);
    }

    public function item_transaction()
    {
        return view('inventory::items.show_fields_transactions');//->with('item', $item);
    }

    /**
     * Show the form for editing the specified Item.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $item = $this->itemRepository->findWithoutFail($id);
        $categories = Category::all();

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        return view('inventory::items.edit')
            ->with('categories', $categories)
            ->with('item', $item);
    }

    /**
     * Update the specified Item in storage.
     *
     * @param  int              $id
     * @param UpdateItemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateItemRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'barcode' => 'unique:items'
        ]);
        if ($validator->fails()) {
            return redirect(route('items.edit',$id))->with('errors',$validator->messages());
        } else {
            $item = $this->itemRepository->findWithoutFail($id);

            if (empty($item)) {
                Flash::error('Item not found');

                return redirect(route('items.index'));
            }
            $request['created_by'] = auth()->id();

            $item = $this->itemRepository->update($request->all(), $id);

            Flash::success('Item updated successfully.');

            return redirect(route('items.index'));
        }
    }

    /**
     * Remove the specified Item from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $item = $this->itemRepository->findWithoutFail($id);

        if (empty($item)) {
            Flash::error('Item not found');

            return redirect(route('items.index'));
        }

        $this->itemRepository->delete($id);

        Flash::success('Item deleted successfully.');

        return redirect(route('items.index'));
    }
}
