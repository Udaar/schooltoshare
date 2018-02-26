<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_costs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id',false,true)->length(10);
            $table->double('cost')->default(1);;
            $table->tinyInteger('is_current')->default(1);;
            $table->integer('created_by',false,true)->length(10);
            $table->tinyInteger('element_status')->default(0);
            $table->double('discount')->default('0.00');
            $table->double('apply_tax')->default('0.00');
            $table->integer('currency_id')->unsigned();
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
        Schema::dropIfExists('item_costs');
    }
}
