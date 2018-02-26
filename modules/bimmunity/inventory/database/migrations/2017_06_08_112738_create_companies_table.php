<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->text('address');
            $table->string('phone')->unique()->nullable();
            $table->string('mobile1',255);
            $table->string('mobile2',255)->nullable();
            $table->string('mobile3',255)->nullable();
            $table->string('fax',255)->nullable();
            $table->string('email')->unique()->nullable();
            $table->enum('company_type',['supplier','customer','both']);
            $table->double('debit')->default(0);
            $table->double('credit')->default(0);
            $table->double('total_value')->default(0);
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
        Schema::dropIfExists('companies');
    }
}
