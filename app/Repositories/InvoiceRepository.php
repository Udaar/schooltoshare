<?php

namespace App\Repositories;

use App\Models\Invoice;
use Illuminate\Container\Container as Application;
use InfyOm\Generator\Common\BaseRepository;

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
     * @param $data
     * @return \Illuminate\Http\Response
     */
    public function createDocument($data)
    {
        $pdf = \PDF::loadView('invoices.invoice', $data);
        $path = storage_path('app/invoices/'.str_slug($data->title).'.pdf');
        $created = file_put_contents($path, $pdf->download());
        if ($created)
        {
          return  $this->document->create(['name' => $data->title, 'path' => storage_path($path)]);
        }else
            return false;

    }
}
