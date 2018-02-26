<?php

namespace Bimmunity\Inventory\Http\Controllers;

use Bimmunity\Inventory\Http\Requests\CreateAcceptedRecordsRequest;
use Bimmunity\Inventory\Http\Requests\UpdateAcceptedRecordsRequest;
use Bimmunity\Inventory\Repositories\AcceptedRecordsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AcceptedRecordsController extends AppBaseController
{
    /** @var  AcceptedRecordsRepository */
    private $acceptedRecordsRepository;

    public function __construct(AcceptedRecordsRepository $acceptedRecordsRepo)
    {
        $this->acceptedRecordsRepository = $acceptedRecordsRepo;
    }

    /**
     * Display a listing of the AcceptedRecords.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->acceptedRecordsRepository->pushCriteria(new RequestCriteria($request));
        $acceptedRecords = $this->acceptedRecordsRepository->all();

        return view('inventory::accepted_records.index')
            ->with('acceptedRecords', $acceptedRecords);
    }

    /**
     * Show the form for creating a new AcceptedRecords.
     *
     * @return Response
     */
    public function create()
    {
        return view('inventory::accepted_records.create');
    }

    /**
     * Store a newly created AcceptedRecords in storage.
     *
     * @param CreateAcceptedRecordsRequest $request
     *
     * @return Response
     */
    public function store(CreateAcceptedRecordsRequest $request)
    {
        $input = $request->all();

        $acceptedRecords = $this->acceptedRecordsRepository->create($input);

        Flash::success('Accepted Records saved successfully.');

        return redirect(route('acceptedRecords.index'));
    }

    /**
     * Display the specified AcceptedRecords.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $acceptedRecords = $this->acceptedRecordsRepository->findWithoutFail($id);

        if (empty($acceptedRecords)) {
            Flash::error('Accepted Records not found');

            return redirect(route('acceptedRecords.index'));
        }

        return view('inventory::accepted_records.show')->with('acceptedRecords', $acceptedRecords);
    }

    /**
     * Show the form for editing the specified AcceptedRecords.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $acceptedRecords = $this->acceptedRecordsRepository->findWithoutFail($id);

        if (empty($acceptedRecords)) {
            Flash::error('Accepted Records not found');

            return redirect(route('acceptedRecords.index'));
        }

        return view('inventory::accepted_records.edit')->with('acceptedRecords', $acceptedRecords);
    }

    /**
     * Update the specified AcceptedRecords in storage.
     *
     * @param  int              $id
     * @param UpdateAcceptedRecordsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAcceptedRecordsRequest $request)
    {
        $acceptedRecords = $this->acceptedRecordsRepository->findWithoutFail($id);

        if (empty($acceptedRecords)) {
            Flash::error('Accepted Records not found');

            return redirect(route('acceptedRecords.index'));
        }

        $acceptedRecords = $this->acceptedRecordsRepository->update($request->all(), $id);

        Flash::success('Accepted Records updated successfully.');

        return redirect(route('acceptedRecords.index'));
    }

    /**
     * Remove the specified AcceptedRecords from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $acceptedRecords = $this->acceptedRecordsRepository->findWithoutFail($id);

        if (empty($acceptedRecords)) {
            Flash::error('Accepted Records not found');

            return redirect(route('acceptedRecords.index'));
        }

        $this->acceptedRecordsRepository->delete($id);

        Flash::success('Accepted Records deleted successfully.');

        return redirect(route('acceptedRecords.index'));
    }
}
