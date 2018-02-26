<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreatePackingRequest;
use Bimmunity\Inventory\Http\Requests\UpdatePackingRequest;
use Bimmunity\Inventory\Repositories\PackingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PackingController extends AppBaseController
{
    /** @var  PackingRepository */
    private $packingRepository;

    public function __construct(PackingRepository $packingRepo)
    {
        
        $this->packingRepository = $packingRepo;
    }

    /**
     * Display a listing of the Packing.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->packingRepository->pushCriteria(new RequestCriteria($request));
        $packings = $this->packingRepository->all();

        return view('inventory::packings.index')
            ->with('packings', $packings);
    }

    /**
     * Show the form for creating a new Packing.
     *
     * @return Response
     */
    public function create()
    {
        return view('inventory::packings.create');
    }

    /**
     * Store a newly created Packing in storage.
     *
     * @param CreatePackingRequest $request
     *
     * @return Response
     */
    public function store(CreatePackingRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();

        $packing = $this->packingRepository->create($input);

        Flash::success('Packing saved successfully.');

        return redirect(route('packings.index'));
    }

    /**
     * Display the specified Packing.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $packing = $this->packingRepository->findWithoutFail($id);

        if (empty($packing)) {
            Flash::error('Packing not found');

            return redirect(route('packings.index'));
        }

        return view('inventory::packings.show')->with('packing', $packing);
    }

    /**
     * Show the form for editing the specified Packing.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $packing = $this->packingRepository->findWithoutFail($id);

        if (empty($packing)) {
            Flash::error('Packing not found');

            return redirect(route('packings.index'));
        }

        return view('inventory::packings.edit')->with('packing', $packing);
    }

    /**
     * Update the specified Packing in storage.
     *
     * @param  int              $id
     * @param UpdatePackingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePackingRequest $request)
    {
        $packing = $this->packingRepository->findWithoutFail($id);

        if (empty($packing)) {
            Flash::error('Packing not found');

            return redirect(route('packings.index'));
        }
        $request['created_by'] = auth()->id();

        $packing = $this->packingRepository->update($request->all(), $id);

        Flash::success('Packing updated successfully.');

        return redirect(route('packings.index'));
    }

    /**
     * Remove the specified Packing from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $packing = $this->packingRepository->findWithoutFail($id);

        if (empty($packing)) {
            Flash::error('Packing not found');

            return redirect(route('packings.index'));
        }

        $this->packingRepository->delete($id);

        Flash::success('Packing deleted successfully.');

        return redirect(route('packings.index'));
    }
}
