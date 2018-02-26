<?php

namespace Bimmunity\Invoice\Http\Controllers;

use Bimmunity\Invoice\Http\Requests\CreatePaymentRequest;
use Bimmunity\Invoice\Http\Requests\UpdatePaymentRequest;
use Bimmunity\Invoice\Repositories\CurrencyRepository;
use Bimmunity\Invoice\Repositories\PaymentMethodRepository;
use Bimmunity\Invoice\Repositories\PaymentRepository;
use App\Http\Controllers\AppBaseController;
use Bimmunity\Invoice\Repositories\PaymentStatusRepository;
use Bimmunity\Invoice\Repositories\AccountRepository;
use Bimmunity\Invoice\Repositories\InvoiceRepository;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Bimmunity\Invoice\Models\Invoice;
use Bimmunity\Ticketing\Models\Actionable;
use Bimmunity\Ticketing\Models\TicketActionStatues;
use Illuminate\Support\Facades\Session;
use Bimmunity\Invoice\Models\Payment;

class PaymentController extends AppBaseController
{
    /** @var  PaymentRepository */
    private $paymentRepository;

    /** @var  PaymentMethodRepository */
    private $methodRepository;

    /** @var  PaymentStatusRepository */
    private $statusRepository;

    /** @var  CurrencyRepository */
    private $currencyRepository;
    private $AccountRepository;
    private $InvoiceRepository;

    /** @var  User */
    private $user;

    public function __construct(InvoiceRepository $InvoiceRepository,AccountRepository $AccountRepository,PaymentRepository $paymentRepo, PaymentMethodRepository $paymentMethodRepo, PaymentStatusRepository $paymentStatusRepo, CurrencyRepository $currencyRepo)
    {
        $this->paymentRepository = $paymentRepo;
        $this->methodRepository = $paymentMethodRepo;
        $this->statusRepository = $paymentStatusRepo;
        $this->currencyRepository = $currencyRepo;
        $this->AccountRepository = $AccountRepository;
        $this->InvoiceRepository = $InvoiceRepository;
        $this->user = Auth::user();

    }

    /**
     * Display a listing of the Payment.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->paymentRepository->pushCriteria(new RequestCriteria($request));
        $payments = $this->paymentRepository->all();

        return view('bimmunity/invoice::payments.index')
            ->with('payments', $payments);
    }

    /**
     * Show the form for creating a new Payment.
     *
     * @return Response
     */
    public function create()
    {
        $methods = $this->methodRepository->all()->pluck('name', 'id');
        $statuses  = $this->statusRepository->all()->pluck('name', 'id');
        $currencies = $this->currencyRepository->all()->pluck('code', 'id');
        $accounts = $this->AccountRepository->all()->pluck('name', 'id');
        $invoices = $this->InvoiceRepository->all()->pluck('title', 'id');
        if(Session::get('ticket_id'))
        {
            $ticket_id = Session::get('ticket_id');
            $action_id =Session::get('action_id');
            return view('bimmunity/invoice::payments.create', compact('action_id','ticket_id','accounts','methods', 'statuses', 'currencies', 'invoices'));
        }
        else
        {
            return view('bimmunity/invoice::payments.create', compact('accounts','methods', 'statuses', 'currencies', 'invoices'));
        }
    }

    /**
     * Store a newly created Payment in storage.
     *
     * @param CreatePaymentRequest $request
     *
     * @return Response
     */
    public function store(CreatePaymentRequest $request)
    {
       
        $input = $request->all();
        $payment = $this->paymentRepository->create($input);

        $this->paymentRepository->attachInvoices($payment, $request->get('invoices'));

        Flash::success('Payment saved successfully.');
        if(! isset( $input['ticket_id'])){
            
            return redirect(route('payments.index'));
         }
        else
        {
            Actionable::create(['ticket_action_id'=>$input['action_id'],'ticket_id'=>$input['ticket_id'],'actionable_type'=>Payment::class,'actionable_id'=>$payment->id]);
            TicketActionStatues::create(['ticket_action_id'=>$input['action_id'],'ticket_id'=>$input['ticket_id'],'status'=>1]);
            return redirect('/tickets/'.$input['ticket_id']);
        }
        
    }

    /**
     * Display the specified Payment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $payment = $this->paymentRepository->findWithoutFail($id);

        if (empty($payment)) {
            Flash::error('Payment not found');

            return redirect(route('payments.index'));
        }

        return view('bimmunity/invoice::payments.show')->with('payment', $payment);
    }

    /**
     * Show the form for editing the specified Payment.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $payment = $this->paymentRepository->findWithoutFail($id);
        $methods = $this->methodRepository->all()->pluck('name', 'id');
        $statuses  = $this->statusRepository->all()->pluck('name', 'id');
        $currencies = $this->currencyRepository->all()->pluck('code', 'id');
        $attachedInvoices = $payment->invoices->pluck('id')->toArray();
        $accounts = $this->AccountRepository->all()->pluck('name', 'id');
        $invoices = $this->InvoiceRepository->all()->pluck('title', 'id');

        if (empty($payment)) {
            Flash::error('Payment not found');

            return redirect(route('payments.index'));
        }

        return view('bimmunity/invoice::payments.edit', compact('accounts','payment', 'methods', 'statuses', 'currencies', 'invoices', 'attachedInvoices'));
    }

    /**
     * Update the specified Payment in storage.
     *
     * @param  int              $id
     * @param UpdatePaymentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaymentRequest $request)
    {
        $payment = $this->paymentRepository->findWithoutFail($id);

        if (empty($payment)) {
            Flash::error('Payment not found');

            return redirect(route('payments.index'));
        }

        $payment = $this->paymentRepository->update($request->all(), $id);

        $this->paymentRepository->attachInvoices($payment, $request->get('invoices'));
        Flash::success('Payment updated successfully.');
        if($request['ticket_id'])
        {
            return redirect()->to('/tickets/'.$request['ticket_id']);
        }
       

        return redirect(route('payments.index'));
    }

    /**
     * Remove the specified Payment from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $payment = $this->paymentRepository->findWithoutFail($id);

        if (empty($payment)) {
            Flash::error('Payment not found');

            return redirect(route('payments.index'));
        }

        $this->paymentRepository->delete($id);

        Flash::success('Payment deleted successfully.');

        return redirect(route('payments.index'));
    }
    public function invoiceamount($idstring,$tocurrency){
        $sum =0;
        $ids = explode( ',', $idstring );
        foreach($ids as $id){
            $invoice =$this->InvoiceRepository->findWithoutFail($id);
            $amount = $invoice->total;
            $from = $invoice->currency->code;
            $sum+=$this->getCurrencyConverted($amount,$from,$tocurrency) ;
        }
        return ceil($sum);
    }
    public function currencyname($id){
        return $this->currencyRepository->findWithoutFail($id)->code;
    }

    function getCurrencyConverted($amount,$from,$to){
        if($from!=$to){
            $url  = "https://finance.google.com/finance/converter?a=".$amount."&from=".$from."&to=".$to;
            $data = file_get_contents($url);
            preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);
             $converted = preg_replace("/[^0-9.]/", "", $converted);
            return round(intval($converted[0]), 3);
        }
        else
           return $amount;
            
    }
    public function editFromTicket($id,$ticket_id)
    {
        return $this->edit($id)->with('ticket_id',$ticket_id);
    }
}
