<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('code');
            $table->string('continent');
            $table->string('region');
            $table->double('surface_area');
            $table->integer('indep_year')->nullable();
            $table->integer('population');
            $table->double('life_expectancy');
            $table->integer('gnp');
            $table->integer('gnp_old');
            $table->string('local_name');
            $table->string('government_form');
            $table->string('head_of_state');
            $table->integer('capital');
            $table->string('code2');
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
        Schema::drop('countries');
    }
}
