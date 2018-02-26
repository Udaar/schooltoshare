<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('readable_type')->nullable();
            $table->integer('readable_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->unique('id');
            $table->dropPrimary('id');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->primary(['user_id','readable_type','readable_id'],'read_module_primary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reads');
    }
}
