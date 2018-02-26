<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateInventoryRequest;
use Bimmunity\Inventory\Http\Requests\UpdateInventoryRequest;
use Bimmunity\Inventory\Models\Item;
use Bimmunity\Inventory\Models\Store;
use Bimmunity\Inventory\Repositories\InventoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class InventoryController extends AppBaseController
{
    /** @var  InventoryRepository */
    private $inventoryRepository;

    public function __construct(InventoryRepository $inventoryRepo)
    {
        
        $this->inventoryRepository = $inventoryRepo;
    }

    /**
     * Display a listing of the Inventory.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->inventoryRepository->pushCriteria(new RequestCriteria($request));
        $inventories = $this->inventoryRepository->all();

        return view('inventory::inventories.index')
            ->with('inventories', $inventories);
    }

    /**
     * Show the form for creating a new Inventory.
     *
     * @return Response
     */
    public function create()
    {
        $stores = Store::all();
        $items = Item::all();
        return view('inventory::inventories.create')
            ->with('stores', $stores)
            ->with('items', $items);
    }

    /**
     * Store a newly created Inventory in storage.
     *
     * @param CreateInventoryRequest $request
     *
     * @return Response
     */
    public function store(CreateInventoryRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();

        $inventory = $this->inventoryRepository->create($input);

        Flash::success('Inventory saved successfully.');

        return redirect(route('inventories.index'));
    }

    /**
     * Display the specified Inventory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inventory = $this->inventoryRepository->findWithoutFail($id);

        if (empty($inventory)) {
            Flash::error('Inventory not found');

            return redirect(route('inventories.index'));
        }

        return view('inventory::inventories.show')->with('inventory', $inventory);
    }

    /**
     * Show the form for editing the specified Inventory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inventory = $this->inventoryRepository->findWithoutFail($id);
        $stores = Store::all();
        $items = Item::all();

        if (empty($inventory)) {
            Flash::error('Inventory not found');

            return redirect(route('inventories.index'));
        }

        return view('inventory::inventories.edit')
            ->with('stores', $stores)
            ->with('items', $items)
            ->with('inventory', $inventory);
    }

    /**
     * Update the specified Inventory in storage.
     *
     * @param  int              $id
     * @param UpdateInventoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInventoryRequest $request)
    {
        $inventory = $this->inventoryRepository->findWithoutFail($id);

        if (empty($inventory)) {
            Flash::error('Inventory not found');

            return redirect(route('inventories.index'));
        }
        $request['created_by'] = auth()->id();

        $inventory = $this->inventoryRepository->update($request->all(), $id);

        Flash::success('Inventory updated successfully.');

        return redirect(route('inventories.index'));
    }

    /**
     * Remove the specified Inventory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $inventory = $this->inventoryRepository->findWithoutFail($id);

        if (empty($inventory)) {
            Flash::error('Inventory not found');

            return redirect(route('inventories.index'));
        }

        $this->inventoryRepository->delete($id);

        Flash::success('Inventory deleted successfully.');

        return redirect(route('inventories.index'));
    }
}
