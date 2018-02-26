<?php

namespace Bimmunity\Bimmodels\Http\Controllers;

use Bimmunity\Bimmodels\Http\Requests\CreateSpaceRequest;
use Bimmunity\Bimmodels\Http\Requests\UpdateSpaceRequest;
use Bimmunity\Bimmodels\Repositories\SpaceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SpaceController extends AppBaseController
{
    /** @var  SpaceRepository */
    private $spaceRepository;

    public function __construct(SpaceRepository $spaceRepo)
    {
        $this->spaceRepository = $spaceRepo;
    }

    /**
     * Display a listing of the Space.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->spaceRepository->pushCriteria(new RequestCriteria($request));
        $spaces = $this->spaceRepository->all();

        return view('bimmodels::spaces.index')
            ->with('spaces', $spaces);
    }

    /**
     * Show the form for creating a new Space.
     *
     * @return Response
     */
    public function create()
    {
        return view('bimmodels::spaces.create');
    }

    /**
     * Store a newly created Space in storage.
     *
     * @param CreateSpaceRequest $request
     *
     * @return Response
     */
    public function store(CreateSpaceRequest $request)
    {
        $input = $request->all();

        $space = $this->spaceRepository->create($input);

        Flash::success('Space saved successfully.');

        return redirect(route('spaces.index'));
    }

    /**
     * Display the specified Space.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $space = $this->spaceRepository->findWithoutFail($id);

        if (empty($space)) {
            Flash::error('Space not found');

            return redirect(route('spaces.index'));
        }

        return view('bimmodels::spaces.show')->with('space', $space);
    }

    /**
     * Show the form for editing the specified Space.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $space = $this->spaceRepository->findWithoutFail($id);

        if (empty($space)) {
            Flash::error('Space not found');

            return redirect(route('spaces.index'));
        }

        return view('bimmodels::spaces.edit')->with('space', $space);
    }

    /**
     * Update the specified Space in storage.
     *
     * @param  int              $id
     * @param UpdateSpaceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSpaceRequest $request)
    {
        $space = $this->spaceRepository->findWithoutFail($id);

        if (empty($space)) {
            Flash::error('Space not found');

            return redirect(route('spaces.index'));
        }

        $space = $this->spaceRepository->update($request->all(), $id);

        Flash::success('Space updated successfully.');

        return redirect(route('spaces.index'));
    }

    /**
     * Remove the specified Space from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $space = $this->spaceRepository->findWithoutFail($id);

        if (empty($space)) {
            Flash::error('Space not found');

            return redirect(route('spaces.index'));
        }

        $this->spaceRepository->delete($id);

        Flash::success('Space deleted successfully.');

        return redirect(route('spaces.index'));
    }
}
