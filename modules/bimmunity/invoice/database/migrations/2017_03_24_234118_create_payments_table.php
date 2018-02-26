<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('method_id')->unsigned();
            //$table->integer('invoice_id')->unsigned();
            $table->integer('account_id')->unsigned();
            $table->integer('details_id')->unsigned()->nullable();
            $table->integer('status_id')->unsigned();
            $table->decimal('amount')->default('0.00');
            $table->dateTime('payment_time');
            $table->integer('currency_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('payments', function (Blueprint $table) {
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('method_id')->references('id')->on('payment_methods')->onDelete('cascade');
            // $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            // //$table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
            // $table->foreign('details_id')->references('id')->on('payment_details')->onDelete('cascade');
            // $table->foreign('status_id')->references('id')->on('payment_status')->onDelete('cascade');
            // $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payments');
    }
}
