<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inventory', function(Blueprint $table)
		{
			$table->foreign('zone_id', 'fk_inventory_zones1')->references('id')->on('zones')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inventory', function(Blueprint $table)
		{
			$table->dropForeign('fk_inventory_zones1');
		});
	}

}
