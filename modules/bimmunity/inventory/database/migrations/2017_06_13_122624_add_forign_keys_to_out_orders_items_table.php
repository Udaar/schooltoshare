<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForignKeysToOutOrdersItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('out_order_items', function (Blueprint $table) {
            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('order_id')
                ->references('id')
                ->on('out_orders')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('item_cost_id')
                ->references('id')
                ->on('item_costs')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('inventory_id')
                ->references('id')
                ->on('inventories')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            // $table->foreign('packing_id')
            //     ->references('id')
            //     ->on('packings')
            //     ->onDelete('NO ACTION')
            //     ->onUpdate('NO ACTION');
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
        Schema::table('out_order_items', function (Blueprint $table) {
            $table->dropForeign(['created_by','order_id','item_cost_id','inventory_id','packing_id']);
        });
    }
}
