<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 350)->nullable();
			$table->string('description', 700)->nullable();
			$table->string('barcode', 100)->nullable();
			$table->integer('zone_price')->nullable();
			$table->integer('category_id')->unsigned()->nullable()->index('cat');
			$table->integer('minmum_quantity')->nullable();
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
		Schema::drop('equipments');
	}

}
