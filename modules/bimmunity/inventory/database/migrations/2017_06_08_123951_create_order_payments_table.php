<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id',false,true)->length(10);
            $table->double('paid')->default(0);
            $table->double('remains')->default(0);
            $table->double('total_value')->default(0);
            $table->integer('company_id',false,true)->length(10);
            $table->string('payer_name');
            $table->dateTime('paid_date');
            $table->integer('company_account_id',false,true)->length(10);
            $table->integer('created_by',false,true)->length(10);
            $table->tinyInteger('element_status')->default(0);
            $table->dateTime('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_payments');
    }
}
