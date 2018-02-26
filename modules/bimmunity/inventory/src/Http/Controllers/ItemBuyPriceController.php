<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateItemBuyPriceRequest;
use Bimmunity\Inventory\Http\Requests\UpdateItemBuyPriceRequest;
use Bimmunity\Inventory\Models\Item;
use Bimmunity\Inventory\Models\ItemBuyPrice;
use Bimmunity\Inventory\Repositories\ItemBuyPriceRepository;
use App\Http\Controllers\AppBaseController;
use Bimmunity\Invoice\Repositories\CurrencyRepository;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Input;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ItemBuyPriceController extends AppBaseController
{
    /** @var  ItemBuyPriceRepository */
    private $itemBuyPriceRepository;
    private $currencyRepository;

    public function __construct(ItemBuyPriceRepository $itemBuyPriceRepo,CurrencyRepository $currencyRepo)
    {
        $this->itemBuyPriceRepository = $itemBuyPriceRepo;
        $this->currencyRepository = $currencyRepo;
    }

    /**
     * Display a listing of the ItemBuyPrice.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->itemBuyPriceRepository->pushCriteria(new RequestCriteria($request));
        $itemBuyPrices = $this->itemBuyPriceRepository->all();

        return view('inventory::item_buy_prices.index')
            ->with('itemBuyPrices', $itemBuyPrices);
    }

    /**
     * Show the form for creating a new ItemBuyPrice.
     *
     * @return Response
     */
    public function create()
    {
        $items = Item::all();
        $currencies = $this->currencyRepository->all()->pluck('code', 'id');
        return view('inventory::item_buy_prices.create')
            ->with('currencies', $currencies)
            ->with('items', $items);;
    }

    /**
     * Store a newly created ItemBuyPrice in storage.
     *
     * @param CreateItemBuyPriceRequest $request
     *
     * @return Response
     */
    public function store(CreateItemBuyPriceRequest $request)
    {
        $input = $request->all();

        $input['created_by'] = auth()->id();
        ItemBuyPrice::where('item_id','=',Input::get('item_id'))->update(['is_current'=>0]);
        $itemBuyPrice = $this->itemBuyPriceRepository->create($input);

        Flash::success('Item Buy Price saved successfully.');

        return redirect(route('itemBuyPrices.index'));
    }

    /**
     * Display the specified ItemBuyPrice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $itemBuyPrice = $this->itemBuyPriceRepository->findWithoutFail($id);

        if (empty($itemBuyPrice)) {
            Flash::error('Item Buy Price not found');

            return redirect(route('itemBuyPrices.index'));
        }

        return view('inventory::item_buy_prices.show')->with('itemBuyPrice', $itemBuyPrice);
    }

    /**
     * Show the form for editing the specified ItemBuyPrice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $itemBuyPrice = $this->itemBuyPriceRepository->findWithoutFail($id);
        $currencies = $this->currencyRepository->all()->pluck('code', 'id');

        if (empty($itemBuyPrice)) {
            Flash::error('Item Buy Price not found');

            return redirect(route('itemBuyPrices.index'));
        }

        $items = Item::all();
        return view('inventory::item_buy_prices.edit')
            ->with('items', $items)
            ->with('currencies', $currencies)
            ->with('itemBuyPrice', $itemBuyPrice);
    }

    /**
     * Update the specified ItemBuyPrice in storage.
     *
     * @param  int              $id
     * @param UpdateItemBuyPriceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateItemBuyPriceRequest $request)
    {
        $itemBuyPrice = $this->itemBuyPriceRepository->findWithoutFail($id);
        ItemBuyPrice::where('item_id','=',Input::get('item_id'))->update(['is_current'=>0]);

        if (empty($itemBuyPrice)) {
            Flash::error('Item Buy Price not found');

            return redirect(route('itemBuyPrices.index'));
        }

        $request['is_current'] = 1;
        $request['created_by'] = auth()->id();
        $itemBuyPrice = $this->itemBuyPriceRepository->update($request->all(), $id);

        Flash::success('Item Buy Price updated successfully.');

        return redirect(route('itemBuyPrices.index'));
    }

    /**
     * Remove the specified ItemBuyPrice from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $itemBuyPrice = $this->itemBuyPriceRepository->findWithoutFail($id);

        if (empty($itemBuyPrice)) {
            Flash::error('Item Buy Price not found');

            return redirect(route('itemBuyPrices.index'));
        }

        $this->itemBuyPriceRepository->delete($id);

        Flash::success('Item Buy Price deleted successfully.');

        return redirect(route('itemBuyPrices.index'));
    }
}
