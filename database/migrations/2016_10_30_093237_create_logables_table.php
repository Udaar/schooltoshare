<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logables', function (Blueprint $table) {
            $table->integer('log_id');
            $table->integer('logable_id');
            $table->string('logable_type');
            $table->timestamps();
            $table->primary(['log_id','logable_type','logable_id'],'logable_module_primary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logables');
    }
}
