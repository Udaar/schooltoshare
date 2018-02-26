<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stock', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('equipment_id')->unsigned()->nullable()->index('fk_stock_equipments2');
			$table->integer('inventory_id')->unsigned()->nullable()->index('fk_stock_inventory1');
			$table->integer('quantity')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->string('minmum_quantity', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stock');
	}

}
