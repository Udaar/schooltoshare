<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToStockTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('stock_transactions', function(Blueprint $table)
		{
			$table->foreign('equipment_id', 'fk_stock_transactions_equipments1')->references('id')->on('equipments')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('inventory_id', 'fk_stock_transactions_inventory1')->references('id')->on('inventory')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('zone_id', 'fk_stock_transactions_zones1')->references('id')->on('zones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('supplier_id', 'fk_stock_transactions_vendors1')->references('id')->on('suppliers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('stock_transactions', function(Blueprint $table)
		{
			$table->dropForeign('fk_stock_transactions_equipments1');
			$table->dropForeign('fk_stock_transactions_inventory1');
			$table->dropForeign('fk_stock_transactions_zones1');
			$table->dropForeign('fk_stock_transactions_vendors1');
		});
	}

}
