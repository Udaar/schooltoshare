<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_details', function(Blueprint $table)
        {
            $table->increments('id');
            $table->bigInteger('credit_id');
            $table->integer('routing_num')->nullable();
            $table->integer('cvv');
            $table->date('expiration_date');
            $table->string('bank_name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payment_details');
    }
}
