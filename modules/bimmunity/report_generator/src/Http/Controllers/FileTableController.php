<?php

namespace Bimmunity\ReportGenerator\Http\Controllers;

use App\Http\Requests\CreateFileTableRequest;
use App\Http\Requests\UpdateFileTableRequest;
use App\Repositories\FileTableRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FileTableController extends AppBaseController
{
    /** @var  FileTableRepository */
    private $fileTableRepository;

    public function __construct(FileTableRepository $fileTableRepo)
    {
        $this->fileTableRepository = $fileTableRepo;
    }

    /**
     * Display a listing of the FileTable.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->fileTableRepository->pushCriteria(new RequestCriteria($request));
        $fileTables = $this->fileTableRepository->all();

        return view('file_tables.index')
            ->with('fileTables', $fileTables);
    }

    /**
     * Show the form for creating a new FileTable.
     *
     * @return Response
     */
    public function create()
    {
        return view('file_tables.create');
    }

    /**
     * Store a newly created FileTable in storage.
     *
     * @param CreateFileTableRequest $request
     *
     * @return Response
     */
    public function store(CreateFileTableRequest $request)
    {
        $input = $request->all();

        $fileTable = $this->fileTableRepository->create($input);

        Flash::success('File Table saved successfully.');

        return redirect(route('fileTables.index'));
    }

    /**
     * Display the specified FileTable.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fileTable = $this->fileTableRepository->findWithoutFail($id);

        if (empty($fileTable)) {
            Flash::error('File Table not found');

            return redirect(route('fileTables.index'));
        }

        return view('file_tables.show')->with('fileTable', $fileTable);
    }

    /**
     * Show the form for editing the specified FileTable.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fileTable = $this->fileTableRepository->findWithoutFail($id);

        if (empty($fileTable)) {
            Flash::error('File Table not found');

            return redirect(route('fileTables.index'));
        }

        return view('file_tables.edit')->with('fileTable', $fileTable);
    }

    /**
     * Update the specified FileTable in storage.
     *
     * @param  int              $id
     * @param UpdateFileTableRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFileTableRequest $request)
    {
        $fileTable = $this->fileTableRepository->findWithoutFail($id);

        if (empty($fileTable)) {
            Flash::error('File Table not found');

            return redirect(route('fileTables.index'));
        }

        $fileTable = $this->fileTableRepository->update($request->all(), $id);

        Flash::success('File Table updated successfully.');

        return redirect(route('fileTables.index'));
    }

    /**
     * Remove the specified FileTable from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fileTable = $this->fileTableRepository->findWithoutFail($id);

        if (empty($fileTable)) {
            Flash::error('File Table not found');

            return redirect(route('fileTables.index'));
        }

        $this->fileTableRepository->delete($id);

        Flash::success('File Table deleted successfully.');

        return redirect(route('fileTables.index'));
    }
}
