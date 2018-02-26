<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSiteZonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('site_zones', function(Blueprint $table)
		{
			$table->foreign('category_id', 'fk_zones_category10')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('site_id', 'fk_zones_site10')->references('id')->on('sites')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('parent_id')->references('id')->on('site_zones')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('site_zones', function(Blueprint $table)
		{
			$table->dropForeign('fk_zones_category10');
			$table->dropForeign('fk_zones_site10');
			$table->dropForeign('site_zones_parent_id_foreign');
		});
	}

}
