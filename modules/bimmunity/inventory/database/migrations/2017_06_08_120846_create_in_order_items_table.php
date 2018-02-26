<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id',false,true)->length(10);
            $table->double('quantity')->default(0);
            $table->integer('inventory_id',false,true)->length(10);
            $table->integer('item_buy_price_id',false,true)->length(10);
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
        Schema::dropIfExists('in_order_items');
    }
}
