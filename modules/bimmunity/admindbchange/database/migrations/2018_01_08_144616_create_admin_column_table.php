<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_columns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('column_original_name',255);
            $table->string('column_admin_name',255);
            $table->string('column_type',255);
            $table->integer('table_id',false,true)->length(10);
            $table->integer('joined_table',false,true)->length(10)->nullable();
            $table->string('joined_column',255)->nullable();
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
        Schema::dropIfExists('admin_tables');
    }
}
