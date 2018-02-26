<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTenantZoneRelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tenant_zone_relation', function(Blueprint $table)
		{
			$table->foreign('zone_id', 'fk_tenant_zone_relation_zones1')->references('id')->on('zones')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_tenant_zone_relation_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tenant_zone_relation', function(Blueprint $table)
		{
			$table->dropForeign('fk_tenant_zone_relation_zones1');
			$table->dropForeign('fk_tenant_zone_relation_users1');
		});
	}

}
