<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateStoreRequest;
use Bimmunity\Inventory\Http\Requests\UpdateStoreRequest;
use App\User;
use Bimmunity\Inventory\Repositories\StoreRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class StoreController extends AppBaseController
{
    /** @var  StoreRepository */
    private $storeRepository;

    public function __construct(StoreRepository $storeRepo)
    {
        
        $this->storeRepository = $storeRepo;
    }

    /**
     * Display a listing of the Store.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->storeRepository->pushCriteria(new RequestCriteria($request));
        $stores = $this->storeRepository->all();

        return view('inventory::stores.index')
            ->with('stores', $stores);
    }

    /**
     * Show the form for creating a new Store.
     *
     * @return Response
     */
    public function create()
    {
        $users = User::all();
        return view('inventory::stores.create')
            ->with('users', $users);
    }

    /**
     * Store a newly created Store in storage.
     *
     * @param CreateStoreRequest $request
     *
     * @return Response
     */
    public function store(CreateStoreRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();

        $store = $this->storeRepository->create($input);

        Flash::success('Store saved successfully.');

        return redirect(route('stores.index'));
    }

    /**
     * Display the specified Store.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $store = $this->storeRepository->findWithoutFail($id);

        if (empty($store)) {
            Flash::error('Store not found');

            return redirect(route('stores.index'));
        }

        return view('inventory::stores.show')->with('store', $store);
    }

    /**
     * Show the form for editing the specified Store.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $store = $this->storeRepository->findWithoutFail($id);
        $users = User::all();

        if (empty($store)) {
            Flash::error('Store not found');

            return redirect(route('stores.index'));
        }

        return view('inventory::stores.edit')
            ->with('users', $users)
            ->with('store', $store);
    }

    /**
     * Update the specified Store in storage.
     *
     * @param  int              $id
     * @param UpdateStoreRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStoreRequest $request)
    {
        $store = $this->storeRepository->findWithoutFail($id);

        if (empty($store)) {
            Flash::error('Store not found');

            return redirect(route('stores.index'));
        }
        $request['created_by'] = auth()->id();

        $store = $this->storeRepository->update($request->all(), $id);

        Flash::success('Store updated successfully.');

        return redirect(route('stores.index'));
    }

    /**
     * Remove the specified Store from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $store = $this->storeRepository->findWithoutFail($id);

        if (empty($store)) {
            Flash::error('Store not found');

            return redirect(route('stores.index'));
        }

        $this->storeRepository->delete($id);

        Flash::success('Store deleted successfully.');

        return redirect(route('stores.index'));
    }
}
