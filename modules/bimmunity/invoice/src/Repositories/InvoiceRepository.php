<?php

namespace Bimmunity\Invoice\Repositories;

use Bimmunity\Invoice\Models\Invoice;
use InfyOm\Generator\Common\BaseRepository;
use File;
class InvoiceRepository extends BaseRepository
{
    /** @var DocumentRepository */
    private $document;

    public function __construct(\Illuminate\Container\Container $app, DocumentRepository $documentRepo)
    {
        parent::__construct($app);
        $this->document = $documentRepo;
    }

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'vendor_id',
        'customer_id',
        'title',
        'description',
        'terms',
        'issue_date',
        'due_date',
        'amount',
        'discount',
        'late_fee',
        'status_id',
        'currency_id',
        'document_id',
        'created_by',
        'updated_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Invoice::class;
    }

    /**
     * Create Invoice PDF
     * @param $invoice
     * @return \Illuminate\Http\Response
     */
    public function createDocument($invoice)
    {
        $pdf = \PDF::loadView('bimmunity/invoice::invoices.invoice',compact('invoice'));
        $path = storage_path('app\invoices\\'.str_slug($invoice->title).'.pdf');
        // dd($path);
        $test_path = storage_path('app\invoices\\');
        
        if(!is_dir($test_path))
        {
            File::makeDirectory($test_path, $mode = 0777, true, true);
        }
        $file = file_put_contents($path, $pdf->download());
        if ($file)
        {
          $document =  $this->document->create(['name' => $invoice->title, 'path' => storage_path($path)]);
          $invoice->update(['document_id' => $document->id]);
        }else
            return false;

    }
}
