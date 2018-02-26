<?php

namespace Bimmunity\Invoice\Http\Controllers;

use Bimmunity\Invoice\Http\Requests\CreateInvoiceStatusRequest;
use Bimmunity\Invoice\Http\Requests\UpdateInvoiceStatusRequest;
use Bimmunity\Invoice\Repositories\InvoiceStatusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class InvoiceStatusController extends AppBaseController
{
    /** @var  InvoiceStatusRepository */
    private $invoiceStatusRepository;

    public function __construct(InvoiceStatusRepository $invoiceStatusRepo)
    {
        $this->invoiceStatusRepository = $invoiceStatusRepo;
    }

    /**
     * Display a listing of the InvoiceStatus.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->invoiceStatusRepository->pushCriteria(new RequestCriteria($request));
        $invoiceStatuses = $this->invoiceStatusRepository->all();

        return view('bimmunity/invoice::invoice_statuses.index')
            ->with('invoiceStatuses', $invoiceStatuses);
    }

    /**
     * Show the form for creating a new InvoiceStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('bimmunity/invoice::invoice_statuses.create');
    }

    /**
     * Store a newly created InvoiceStatus in storage.
     *
     * @param CreateInvoiceStatusRequest $request
     *
     * @return Response
     */
    public function store(CreateInvoiceStatusRequest $request)
    {
        $input = $request->all();

        $invoiceStatus = $this->invoiceStatusRepository->create($input);

        Flash::success('Invoice Status saved successfully.');

        return redirect(route('invoice_statuses.index'));
    }

    /**
     * Display the specified InvoiceStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invoiceStatus = $this->invoiceStatusRepository->findWithoutFail($id);

        if (empty($invoiceStatus)) {
            Flash::error('Invoice Status not found');

            return redirect(route('invoice_statuses.index'));
        }

        return view('bimmunity/invoice::invoice_statuses.show')->with('invoiceStatus', $invoiceStatus);
    }

    /**
     * Show the form for editing the specified InvoiceStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invoiceStatus = $this->invoiceStatusRepository->findWithoutFail($id);

        if (empty($invoiceStatus)) {
            Flash::error('Invoice Status not found');

            return redirect(route('invoice_statuses.index'));
        }

        return view('bimmunity/invoice::invoice_statuses.edit')->with('invoiceStatus', $invoiceStatus);
    }

    /**
     * Update the specified InvoiceStatus in storage.
     *
     * @param  int              $id
     * @param UpdateInvoiceStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInvoiceStatusRequest $request)
    {
        $invoiceStatus = $this->invoiceStatusRepository->findWithoutFail($id);

        if (empty($invoiceStatus)) {
            Flash::error('Invoice Status not found');

            return redirect(route('invoice_statuses.index'));
        }

        $invoiceStatus = $this->invoiceStatusRepository->update($request->all(), $id);

        Flash::success('Invoice Status updated successfully.');

        return redirect(route('invoice_statuses.index'));
    }

    /**
     * Remove the specified InvoiceStatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invoiceStatus = $this->invoiceStatusRepository->findWithoutFail($id);

        if (empty($invoiceStatus)) {
            Flash::error('Invoice Status not found');

            return redirect(route('invoice_statuses.index'));
        }

        $this->invoiceStatusRepository->delete($id);

        Flash::success('Invoice Status deleted successfully.');

        return redirect(route('invoice_statuses.index'));
    }
}
