<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundGovSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund_gov_schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id');
            $table->integer('user_id');           
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
        Schema::dropIfExists('fund_gov_schools');
    }
}
