<?php

namespace Bimmunity\Invoice\Http\Controllers;

use Bimmunity\Invoice\Http\Requests\CreateInvoiceRequest;
use Bimmunity\Invoice\Http\Requests\UpdateInvoiceRequest;
use Bimmunity\Invoice\Repositories\CurrencyRepository;
use Bimmunity\Invoice\Repositories\CustomerRepository;
use Bimmunity\Invoice\Repositories\InvoiceRepository;
use App\Http\Controllers\AppBaseController;
use Bimmunity\Invoice\Repositories\InvoiceStatusRepository;
use Bimmunity\Invoice\Repositories\AccountRepository;
use Bimmunity\Invoice\Models\Product;
use Bimmunity\Invoice\Models\Invoice_Product;
use Bimmunity\Invoice\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Validator;

class InvoiceController extends AppBaseController
{
    /** @var  InvoiceRepository */
    private $invoiceRepository;

    /** @var InvoiceStatusRepository */
    private $invoiceStatusRepository;

    /** @var  VendorRepository */
    private $AccountRepository;

    /** @var  CustomerRepository */
    private $customerRepository;

    /** @var  CurrencyRepository */
    private $currencyRepository;
    private $ProductRepository;

    /** @var  \Bimmunity\Invoice\Models\User */
    private $user;

    public function __construct(ProductRepository $ProductRepository,InvoiceRepository $invoiceRepo, InvoiceStatusRepository $statusRepo,
                                 CustomerRepository $customerRepo, CurrencyRepository $currencyRepo)
    {
        $this->invoiceRepository        = $invoiceRepo;
        $this->invoiceStatusRepository  = $statusRepo;
        $this->customerRepository       = $customerRepo;
        $this->currencyRepository       = $currencyRepo;
        $this->ProductRepository       = $ProductRepository;
        $this->user                     = Auth::user();
    }

    /**
     * Display a listing of the Invoice.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        //\Currency::convert('USD', 'TRY', 20);

        $this->invoiceRepository->pushCriteria(new RequestCriteria($request));
        $invoices = $this->invoiceRepository->all();

        return view('bimmunity/invoice::invoices.index')
            ->with('invoices', $invoices);
    }

    /**
     * Show the form for creating a new Invoice.
     *
     * @return Response
     */
    public function create()
    {   
        
        $status     = $this->invoiceStatusRepository->all()->pluck('name', 'id');
        $customers  = $this->customerRepository->all()->pluck('name', 'id');
        $currencies = $this->currencyRepository->all()->pluck('code', 'id');
        $products = $this->ProductRepository->all();
        return view('bimmunity/invoice::invoices.create', compact('products','status', 'accounts', 'customers', 'currencies'));
    }

    /**
     * Store a newly created Invoice in storage.
     *
     * @param CreateInvoiceRequest $request
     *
     * @return Response
     */
    public function store(CreateInvoiceRequest $request)
    {

         $input = $request->all();
         
         $this->validate($request, [
              'code' => 'required|unique:invoices,code',
              'currency_id'=>'required',
              'issue_date'=>'required|date',
              'due_date'=>'required|date|after:issue_date'
        ]);
         $invoice = $this->invoiceRepository->create($input);
         if(isset($input['product_id'])){
             foreach($input['product_id'] as $key=>$product_id){
             $invoice->products()->attach($product_id,['quantity'=>$input['quantity'][$key]]);
         }
         }
         
        // return $invoice->products()->attach($input['product_id']);
        $i=0;
        $document = $this->invoiceRepository->createDocument($invoice);

        if (!$document)
        {
            Flash::success('Invoice saved successfully, Generate invoice document faild');
        }else
            Flash::success('Invoice saved successfully.');

        return redirect(route('invoices.index'));
    }

    /**
     * Display the specified Invoice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invoice = $this->invoiceRepository->findWithoutFail($id);
        
        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        return view('bimmunity/invoice::invoices.show')->with('invoice', $invoice);
    }

    /**
     * Show the form for editing the specified Invoice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $status     = $this->invoiceStatusRepository->all()->pluck('name', 'id');
        $customers  = $this->customerRepository->all()->pluck('name', 'id');
        $currencies = $this->currencyRepository->all()->pluck('code', 'id');
        $products = $this->ProductRepository->all();

        $invoice = $this->invoiceRepository->findWithoutFail($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        return view('bimmunity/invoice::invoices.edit', compact('products','status', 'accounts', 'customers', 'currencies'))->with('invoice', $invoice);
    }

    /**
     * Update the specified Invoice in storage.
     *
     * @param  int              $id
     * @param UpdateInvoiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInvoiceRequest $request)
    {
        $this->validate($request, [
            'code' => 'required',
            'currency_id'=>'required',
            'issue_date'=>'required|date',
            'due_date'=>'required|date|after:issue_date',
            'product_id'=>'required',
            'quantity'=>'required'
        ]);

        $input= $request->all();
        $invoice = $this->invoiceRepository->findWithoutFail($id);
        $ids  = $invoice->products->pluck('id');
        foreach($ids as $key=>$product_id){
             $invoice->products()->detach($product_id);
         }
        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        $invoice = $this->invoiceRepository->update($request->all(), $id);
        foreach($input['product_id'] as $key=>$product_id){
             $invoice->products()->attach($product_id,['quantity'=>$input['quantity'][$key]]);
         }

        Flash::success('Invoice updated successfully.');

        return redirect(route('invoices.index'));
    }

    /**
     * Remove the specified Invoice from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invoice = $this->invoiceRepository->findWithoutFail($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }
        if($invoice->IsPaied()){
             Flash::error('You can\'t delete this Invoice');

            return redirect(route('invoices.index'));
        }

        $this->invoiceRepository->delete($id);

        Flash::success('Invoice deleted successfully.');

        return redirect(route('invoices.index'));
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
    public function currencyname($id){
        return $this->currencyRepository->findWithoutFail($id)->code;
    }
}
