<?php

namespace Bimmunity\Bimmodels\Http\Controllers;

use Bimmunity\Bimmodels\Http\Requests\CreateBim_systemRequest;
use Bimmunity\Bimmodels\Http\Requests\UpdateBim_systemRequest;
use Bimmunity\Bimmodels\Repositories\Bim_systemRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Bim_systemController extends AppBaseController
{
    /** @var  Bim_systemRepository */
    private $bimSystemRepository;

    public function __construct(Bim_systemRepository $bimSystemRepo)
    {
        $this->bimSystemRepository = $bimSystemRepo;
    }

    /**
     * Display a listing of the Bim_system.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bimSystemRepository->pushCriteria(new RequestCriteria($request));
        $bimSystems = $this->bimSystemRepository->all();

        return view('bimmodels::bim_systems.index')
            ->with('bimSystems', $bimSystems);
    }

    /**
     * Show the form for creating a new Bim_system.
     *
     * @return Response
     */
    public function create()
    {
        return view('bimmodels::bim_systems.create');
    }

    /**
     * Store a newly created Bim_system in storage.
     *
     * @param CreateBim_systemRequest $request
     *
     * @return Response
     */
    public function store(CreateBim_systemRequest $request)
    {
        $input = $request->all();

        $bimSystem = $this->bimSystemRepository->create($input);

        Flash::success('Bim System saved successfully.');

        return redirect(route('bimSystems.index'));
    }

    /**
     * Display the specified Bim_system.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bimSystem = $this->bimSystemRepository->findWithoutFail($id);

        if (empty($bimSystem)) {
            Flash::error('Bim System not found');

            return redirect(route('bimSystems.index'));
        }

        return view('bimmodels::bim_systems.show')->with('bimSystem', $bimSystem);
    }

    /**
     * Show the form for editing the specified Bim_system.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bimSystem = $this->bimSystemRepository->findWithoutFail($id);

        if (empty($bimSystem)) {
            Flash::error('Bim System not found');

            return redirect(route('bimSystems.index'));
        }

        return view('bimmodels::bim_systems.edit')->with('bimSystem', $bimSystem);
    }

    /**
     * Update the specified Bim_system in storage.
     *
     * @param  int              $id
     * @param UpdateBim_systemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBim_systemRequest $request)
    {
        $bimSystem = $this->bimSystemRepository->findWithoutFail($id);

        if (empty($bimSystem)) {
            Flash::error('Bim System not found');

            return redirect(route('bimSystems.index'));
        }

        $bimSystem = $this->bimSystemRepository->update($request->all(), $id);

        Flash::success('Bim System updated successfully.');

        return redirect(route('bimSystems.index'));
    }

    /**
     * Remove the specified Bim_system from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bimSystem = $this->bimSystemRepository->findWithoutFail($id);

        if (empty($bimSystem)) {
            Flash::error('Bim System not found');

            return redirect(route('bimSystems.index'));
        }

        $this->bimSystemRepository->delete($id);

        Flash::success('Bim System deleted successfully.');

        return redirect(route('bimSystems.index'));
    }
}
