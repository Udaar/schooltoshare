<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToZonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('zones', function(Blueprint $table)
		{
			$table->foreign('building_id', 'fk_zones_buildings1')->references('id')
				->on('buildings')->onUpdate('CASCADE')->onDelete('NO ACTION');
			
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('zones', function(Blueprint $table)
		{
			$table->dropForeign('fk_zones_buildings1');
		});
	}

}
