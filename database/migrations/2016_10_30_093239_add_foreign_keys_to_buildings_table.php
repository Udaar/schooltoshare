<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBuildingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('buildings', function(Blueprint $table)
		{
			$table->foreign('category_id', 'fk_buildings_category1')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('site_id', 'fk_buildings_sites1')->references('id')->on('sites')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('buildings', function(Blueprint $table)
		{
			$table->dropForeign('fk_buildings_category1');
			$table->dropForeign('fk_buildings_sites1');
		});
	}

}
