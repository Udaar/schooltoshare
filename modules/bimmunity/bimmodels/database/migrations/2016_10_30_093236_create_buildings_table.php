<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuildingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('buildings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 250)->nullable();
			$table->string('address', 300)->nullable();
			$table->string('phone', 45)->nullable();
			$table->text('emergency_info', 16777215)->nullable();
			$table->string('gps_lat', 50)->nullable();
			$table->string('gps_long', 50)->nullable();
			$table->integer('country_id');
			$table->integer('city_id');
			$table->integer('owner_id');
			$table->text('layer_url')->nullable();
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
		Schema::drop('buildings');
	}

}
