<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForignKeysToInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('inventories', function (Blueprint $table) {
            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('store_id')
                ->references('id')
                ->on('stores')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('item_id')
                ->references('id')
                ->on('items')
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
        Schema::table('inventories', function (Blueprint $table) {
            $table->dropForeign(['created_by','store_id','item_id']);
        });
    }
}
