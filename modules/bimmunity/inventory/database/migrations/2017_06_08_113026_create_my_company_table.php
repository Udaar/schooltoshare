<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->double('debit')->default(0);
            $table->double('credit')->default(0);
            $table->double('total_balance')->default(0);
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
        Schema::dropIfExists('my_company');
    }
}
