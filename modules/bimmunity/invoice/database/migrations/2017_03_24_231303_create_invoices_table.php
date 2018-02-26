<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('amount');
            $table->integer('customer_id')->unsigned()->nullable();
            $table->string('code');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('terms')->nullable();
            $table->dateTime('issue_date');
            $table->dateTime('due_date');
            $table->decimal('total')->default('0.00');
            $table->decimal('discount')->default('0.00');
            $table->integer('status_id')->unsigned();
            $table->integer('currency_id')->unsigned();
            $table->integer('document_id')->unsigned()->nullable();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('invoices', function (Blueprint $table) {
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           
            // $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            // $table->foreign('status_id')->references('id')->on('invoice_status')->onDelete('cascade');
            // $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
            // $table->foreign('document_id')->references('id')->on('documents')->onDelete('cascade');
            // $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('invoices');
    }
}
