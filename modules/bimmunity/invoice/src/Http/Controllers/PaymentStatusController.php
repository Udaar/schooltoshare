<?php

namespace Bimmunity\Invoice\Http\Controllers;

use Bimmunity\Invoice\Http\Requests\CreatePaymentStatusRequest;
use Bimmunity\Invoice\Http\Requests\UpdatePaymentStatusRequest;
use Bimmunity\Invoice\Repositories\PaymentStatusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PaymentStatusController extends AppBaseController
{
    /** @var  PaymentStatusRepository */
    private $paymentStatusRepository;

    public function __construct(PaymentStatusRepository $paymentStatusRepo)
    {
        $this->paymentStatusRepository = $paymentStatusRepo;
    }

    /**
     * Display a listing of the PaymentStatus.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->paymentStatusRepository->pushCriteria(new RequestCriteria($request));
        $paymentStatuses = $this->paymentStatusRepository->all();

        return view('bimmunity/invoice::payment_statuses.index')
            ->with('paymentStatuses', $paymentStatuses);
    }

    /**
     * Show the form for creating a new PaymentStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('bimmunity/invoice::payment_statuses.create');
    }

    /**
     * Store a newly created PaymentStatus in storage.
     *
     * @param CreatePaymentStatusRequest $request
     *
     * @return Response
     */
    public function store(CreatePaymentStatusRequest $request)
    {
        $input = $request->all();

        $paymentStatus = $this->paymentStatusRepository->create($input);

        Flash::success('Payment Status saved successfully.');

        return redirect(route('payment_statuses.index'));
    }

    /**
     * Display the specified PaymentStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paymentStatus = $this->paymentStatusRepository->findWithoutFail($id);

        if (empty($paymentStatus)) {
            Flash::error('Payment Status not found');

            return redirect(route('payment_statuses.index'));
        }

        return view('bimmunity/invoice::payment_statuses.show')->with('paymentStatus', $paymentStatus);
    }

    /**
     * Show the form for editing the specified PaymentStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paymentStatus = $this->paymentStatusRepository->findWithoutFail($id);

        if (empty($paymentStatus)) {
            Flash::error('Payment Status not found');

            return redirect(route('payment_statuses.index'));
        }

        return view('bimmunity/invoice::payment_statuses.edit')->with('paymentStatus', $paymentStatus);
    }

    /**
     * Update the specified PaymentStatus in storage.
     *
     * @param  int              $id
     * @param UpdatePaymentStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaymentStatusRequest $request)
    {
        $paymentStatus = $this->paymentStatusRepository->findWithoutFail($id);

        if (empty($paymentStatus)) {
            Flash::error('Payment Status not found');

            return redirect(route('payment_statuses.index'));
        }

        $paymentStatus = $this->paymentStatusRepository->update($request->all(), $id);

        Flash::success('Payment Status updated successfully.');

        return redirect(route('payment_statuses.index'));
    }

    /**
     * Remove the specified PaymentStatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paymentStatus = $this->paymentStatusRepository->findWithoutFail($id);

        if (empty($paymentStatus)) {
            Flash::error('Payment Status not found');

            return redirect(route('payment_statuses.index'));
        }

        $this->paymentStatusRepository->delete($id);

        Flash::success('Payment Status deleted successfully.');

        return redirect(route('payment_statuses.index'));
    }
}
