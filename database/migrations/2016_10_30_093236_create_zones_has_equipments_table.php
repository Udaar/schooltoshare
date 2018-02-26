<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateZonesHasEquipmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zones_has_equipments', function(Blueprint $table)
		{
			$table->increments('id');
            $table->text('note')->nullable();
			$table->integer('zone_id')->unsigned();
			$table->integer('equipment_id')->unsigned();
			$table->dateTime('installation_date_time')->nullable();
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
		Schema::drop('zones_has_equipments');
	}

}
