<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number',255);
            $table->dateTime('date_required');
            $table->dateTime('date_received');
            $table->integer('company_id',false,true)->length(10);
            $table->integer('status')->default(0);
            $table->double('cost')->default(0);
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
        Schema::dropIfExists('in_orders');
    }
}
