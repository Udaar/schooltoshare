<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id',false,true)->length(10);
            $table->integer('item_id',false,true)->length(10);
            $table->double('quantity')->default(0);
            $table->double('issued_quantity')->default(0);
            $table->double('remains_quantity')->default(0);
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
        Schema::dropIfExists('inventories');
    }
}
