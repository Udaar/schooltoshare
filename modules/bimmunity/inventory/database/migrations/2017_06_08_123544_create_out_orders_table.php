<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number',255);
            $table->dateTime('date_required');
            $table->dateTime('date_received');
            $table->integer('company_id',false,true)->length(10);
            $table->integer('status')->default(0); // {0=>created, 1=>pending, 2=>refused, 3=>accepted}
            $table->double('cost')->default(0);
            $table->double('paid')->default(0);
            $table->double('remains')->default(0);
            $table->integer('created_by',false,true)->length(10);
            $table->tinyInteger('element_status')->default(0); //{0=>created, 1=>sales, 2=>finance, 3=>qc, 4=>packing, 5=>returned, 6=>done}
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
        Schema::dropIfExists('out_orders');
    }
}
