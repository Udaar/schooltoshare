<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoiceables', function (Blueprint $table) {
            $table->unsignedInteger('invoice_id');
            $table->unsignedInteger('invoiceable_id');
            $table->string('invoiceable_type');
            $table->timestamps();

            // Indexes
            // $table->unique(['invoice_id', 'invoiceable_id', 'invoiceable_type'], 'invoiceables_ids_type_unique');
            // $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('invoiceables');
    }
}
