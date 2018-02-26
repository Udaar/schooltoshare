<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateItemCostRequest;
use Bimmunity\Inventory\Http\Requests\UpdateItemCostRequest;
use Bimmunity\Inventory\Models\Item;
use Bimmunity\Inventory\Models\ItemCost;
use Bimmunity\Inventory\Repositories\ItemCostRepository;
use Bimmunity\Invoice\Repositories\CurrencyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Input;

class ItemCostController extends AppBaseController
{
    /** @var  ItemCostRepository */
    private $itemCostRepository;
    private $currencyRepository;

    public function __construct(ItemCostRepository $itemCostRepo,CurrencyRepository $currencyRepo)
    {
        $this->itemCostRepository = $itemCostRepo;
        $this->currencyRepository = $currencyRepo;
    }

    /**
     * Display a listing of the ItemCost.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->itemCostRepository->pushCriteria(new RequestCriteria($request));
        $itemCosts = $this->itemCostRepository->all();

        return view('inventory::item_costs.index')
            ->with('itemCosts', $itemCosts);
    }

    /**
     * Show the form for creating a new ItemCost.
     *
     * @return Response
     */
    public function create()
    {
        $currencies = $this->currencyRepository->all()->pluck('code', 'id');
        $items = Item::all();
        return view('inventory::item_costs.create')
            ->with('currencies', $currencies)
            ->with('items', $items);
    }

    /**
     * Store a newly created ItemCost in storage.
     *
     * @param CreateItemCostRequest $request
     *
     * @return Response
     */
    public function store(CreateItemCostRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();

        ItemCost::where('item_id','=',Input::get('item_id'))->update(['is_current'=>0]);
        $itemCost = $this->itemCostRepository->create($input);

        Flash::success('Item Cost saved successfully.');

        return redirect(route('itemCosts.index'));
    }

    /**
     * Display the specified ItemCost.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $itemCost = $this->itemCostRepository->findWithoutFail($id);

        if (empty($itemCost)) {
            Flash::error('Item Cost not found');

            return redirect(route('itemCosts.index'));
        }

        return view('inventory::item_costs.show')->with('itemCost', $itemCost);
    }

    /**
     * Show the form for editing the specified ItemCost.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $itemCost = $this->itemCostRepository->findWithoutFail($id);
        $currencies = $this->currencyRepository->all()->pluck('code', 'id');

        if (empty($itemCost)) {
            Flash::error('Item Cost not found');

            return redirect(route('itemCosts.index'));
        }

        $items = Item::all();
        return view('inventory::item_costs.edit')
            ->with('items', $items)
            ->with('currencies', $currencies)
            ->with('itemCost', $itemCost);
    }

    /**
     * Update the specified ItemCost in storage.
     *
     * @param  int              $id
     * @param UpdateItemCostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateItemCostRequest $request)
    {
        $itemCost = $this->itemCostRepository->findWithoutFail($id);
        ItemCost::where('item_id','=',Input::get('item_id'))->update(['is_current'=>0]);

        if (empty($itemCost)) {
            Flash::error('Item Cost not found');

            return redirect(route('itemCosts.index'));
        }

        $request['created_by'] = auth()->id();
        $request['is_current'] = 1;
        $itemCost = $this->itemCostRepository->update($request->all(), $id);

        Flash::success('Item Cost updated successfully.');

        return redirect(route('itemCosts.index'));
    }

    /**
     * Remove the specified ItemCost from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $itemCost = $this->itemCostRepository->findWithoutFail($id);

        if (empty($itemCost)) {
            Flash::error('Item Cost not found');

            return redirect(route('itemCosts.index'));
        }

        $this->itemCostRepository->delete($id);

        Flash::success('Item Cost deleted successfully.');

        return redirect(route('itemCosts.index'));
    }
}
