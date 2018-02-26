<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('table_name',255);
            $table->string('table_slug',255);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('file_table');
    }
}
