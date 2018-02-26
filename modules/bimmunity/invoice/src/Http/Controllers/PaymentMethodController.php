<?php

namespace Bimmunity\Invoice\Http\Controllers;

use Bimmunity\Invoice\Http\Requests\CreatePaymentMethodRequest;
use Bimmunity\Invoice\Http\Requests\UpdatePaymentMethodRequest;
use Bimmunity\Invoice\Repositories\PaymentMethodRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PaymentMethodController extends AppBaseController
{
    /** @var  PaymentMethodRepository */
    private $paymentMethodRepository;

    public function __construct(PaymentMethodRepository $paymentMethodRepo)
    {
        $this->paymentMethodRepository = $paymentMethodRepo;
    }

    /**
     * Display a listing of the PaymentMethod.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->paymentMethodRepository->pushCriteria(new RequestCriteria($request));
        $paymentMethods = $this->paymentMethodRepository->all();

        return view('bimmunity/invoice::payment_methods.index')
            ->with('paymentMethods', $paymentMethods);
    }

    /**
     * Show the form for creating a new PaymentMethod.
     *
     * @return Response
     */
    public function create()
    {
        return view('bimmunity/invoice::payment_methods.create');
    }

    /**
     * Store a newly created PaymentMethod in storage.
     *
     * @param CreatePaymentMethodRequest $request
     *
     * @return Response
     */
    public function store(CreatePaymentMethodRequest $request)
    {
        $input = $request->all();

        $paymentMethod = $this->paymentMethodRepository->create($input);

        Flash::success('Payment Method saved successfully.');

        return redirect(route('payment_methods.index'));
    }

    /**
     * Display the specified PaymentMethod.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paymentMethod = $this->paymentMethodRepository->findWithoutFail($id);

        if (empty($paymentMethod)) {
            Flash::error('Payment Method not found');

            return redirect(route('payment_methods.index'));
        }

        return view('bimmunity/invoice::payment_methods.show')->with('paymentMethod', $paymentMethod);
    }

    /**
     * Show the form for editing the specified PaymentMethod.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paymentMethod = $this->paymentMethodRepository->findWithoutFail($id);

        if (empty($paymentMethod)) {
            Flash::error('Payment Method not found');

            return redirect(route('payment_methods.index'));
        }

        return view('bimmunity/invoice::payment_methods.edit')->with('paymentMethod', $paymentMethod);
    }

    /**
     * Update the specified PaymentMethod in storage.
     *
     * @param  int              $id
     * @param UpdatePaymentMethodRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaymentMethodRequest $request)
    {
        $paymentMethod = $this->paymentMethodRepository->findWithoutFail($id);

        if (empty($paymentMethod)) {
            Flash::error('Payment Method not found');

            return redirect(route('payment_methods.index'));
        }

        $paymentMethod = $this->paymentMethodRepository->update($request->all(), $id);

        Flash::success('Payment Method updated successfully.');

        return redirect(route('payment_methods.index'));
    }

    /**
     * Remove the specified PaymentMethod from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paymentMethod = $this->paymentMethodRepository->findWithoutFail($id);

        if (empty($paymentMethod)) {
            Flash::error('Payment Method not found');

            return redirect(route('payment_methods.index'));
        }

        $this->paymentMethodRepository->delete($id);

        Flash::success('Payment Method deleted successfully.');

        return redirect(route('payment_methods.index'));
    }
}
