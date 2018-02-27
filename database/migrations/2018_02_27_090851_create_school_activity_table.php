<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_facility', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->integer('facility_id');           
            $table->timestamps();
            $table->softDeletes();						
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_facility');
    }
}
