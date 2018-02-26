<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcceptedRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accepted_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('accepted_by',false,true)->length(10)->nullable();
            $table->dateTime('accepted_date')->nullable();
            $table->string('related_module',255);
            $table->integer('related_module_id',false,true)->length(10);
            $table->text('notes')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('active')->default(0);
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
        Schema::dropIfExists('accepted_records');
    }
}
