<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToZonesHasEquipmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('zones_has_equipments', function(Blueprint $table)
		{
			$table->foreign('equipment_id')->references('id')->on('equipments')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('zone_id')	->references('id')->on('zones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('zones_has_equipments', function(Blueprint $table)
		{
			$table->dropForeign(['zone_id']);
			$table->dropForeign(['equipment_id']);
		});
	}

}
