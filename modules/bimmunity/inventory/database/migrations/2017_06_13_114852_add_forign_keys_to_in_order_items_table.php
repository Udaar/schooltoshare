<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForignKeysToInOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('in_order_items', function (Blueprint $table) {
            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('order_id')
                ->references('id')
                ->on('in_orders')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            // $table->foreign('item_buy_price_id')
            //     ->references('id')
            //     ->on('item_buy_price')
            //     ->onDelete('NO ACTION')
            //     ->onUpdate('NO ACTION');

            $table->foreign('inventory_id')
                ->references('id')
                ->on('inventories')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('in_order_items', function (Blueprint $table) {
            $table->dropForeign(['created_by','order_id','item_buy_price_id','inventory_id']);
        });
    }
}
