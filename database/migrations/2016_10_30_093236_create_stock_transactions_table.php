<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStockTransactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stock_transactions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->dateTime('transaction_date_time')->nullable();
			$table->string('type', 45)->nullable();
			$table->integer('equipment_id')->unsigned()->nullable()->index('fk_stock_transactions_equipments1_idx');
			$table->integer('quantity')->unsigned()->nullable();
			$table->integer('inventory_id')->unsigned()->nullable()->index('fk_stock_transactions_inventory1_idx');
			$table->integer('zone_id')->unsigned()->nullable()->index('fk_stock_transactions_zones1_idx');
			$table->integer('supplier_id')->unsigned()->nullable()->index('fk_stock_transactions_vendors1_idx');
			$table->string('note', 500)->nullable();
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
		Schema::drop('stock_transactions');
	}

}
