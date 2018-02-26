<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('stock', function(Blueprint $table)
		{
			$table->foreign('equipment_id', 'fk_stock_equipments2')->references('id')->on('equipments')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('inventory_id', 'fk_stock_inventory1')->references('id')->on('inventory')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('stock', function(Blueprint $table)
		{
			$table->dropForeign('fk_stock_equipments2');
			$table->dropForeign('fk_stock_inventory1');
		});
	}

}
