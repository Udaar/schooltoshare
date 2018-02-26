<?php

namespace Bimmunity\Bimmodels\Http\Controllers;

use Bimmunity\Bimmodels\Http\Requests\CreateBim_projectRequest;
use Bimmunity\Bimmodels\Http\Requests\UpdateBim_projectRequest;
use Bimmunity\Bimmodels\Repositories\Bim_projectRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class Bim_projectController extends AppBaseController
{
    /** @var  Bim_projectRepository */
    private $bimProjectRepository;

    public function __construct(Bim_projectRepository $bimProjectRepo)
    {
        $this->bimProjectRepository = $bimProjectRepo;
    }

    /**
     * Display a listing of the Bim_project.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bimProjectRepository->pushCriteria(new RequestCriteria($request));
        $bimProjects = $this->bimProjectRepository->all();

        return view('bimmodels::bim_projects.index')
            ->with('bimProjects', $bimProjects);
    }

    /**
     * Show the form for creating a new Bim_project.
     *
     * @return Response
     */
    public function create()
    {
        return view('bimmodels::bim_projects.create');
    }

    /**
     * Store a newly created Bim_project in storage.
     *
     * @param CreateBim_projectRequest $request
     *
     * @return Response
     */
    public function store(CreateBim_projectRequest $request)
    {
        $input = $request->all();

        $bimProject = $this->bimProjectRepository->create($input);

        Flash::success('Bim Project saved successfully.');

        return redirect(route('bimProjects.index'));
    }

    /**
     * Display the specified Bim_project.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $bimProject = $this->bimProjectRepository->findWithoutFail($id);

        if (empty($bimProject)) {
            Flash::error('Bim Project not found');

            return redirect(route('bimProjects.index'));
        }

        return view('bimmodels::bim_projects.show')->with('bimProject', $bimProject);
    }

    /**
     * Show the form for editing the specified Bim_project.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $bimProject = $this->bimProjectRepository->findWithoutFail($id);

        if (empty($bimProject)) {
            Flash::error('Bim Project not found');

            return redirect(route('bimProjects.index'));
        }

        return view('bimmodels::bim_projects.edit')->with('bimProject', $bimProject);
    }

    /**
     * Update the specified Bim_project in storage.
     *
     * @param  int              $id
     * @param UpdateBim_projectRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBim_projectRequest $request)
    {
        $bimProject = $this->bimProjectRepository->findWithoutFail($id);

        if (empty($bimProject)) {
            Flash::error('Bim Project not found');

            return redirect(route('bimProjects.index'));
        }

        $bimProject = $this->bimProjectRepository->update($request->all(), $id);

        Flash::success('Bim Project updated successfully.');

        return redirect(route('bimProjects.index'));
    }

    /**
     * Remove the specified Bim_project from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $bimProject = $this->bimProjectRepository->findWithoutFail($id);

        if (empty($bimProject)) {
            Flash::error('Bim Project not found');

            return redirect(route('bimProjects.index'));
        }

        $this->bimProjectRepository->delete($id);

        Flash::success('Bim Project deleted successfully.');

        return redirect(route('bimProjects.index'));
    }
}
