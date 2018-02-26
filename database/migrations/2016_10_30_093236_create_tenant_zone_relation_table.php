<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTenantZoneRelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tenant_zone_relation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->nullable()->index('fk_tenant_zone_relation_users1_idx');
			$table->integer('zone_id')->unsigned()->nullable()->index('fk_tenant_zone_relation_zones1_idx');
			$table->dateTime('from')->nullable();
			$table->dateTime('to')->nullable();
			$table->integer('price')->nullable();
			$table->integer('duration_num')->nullable();
			$table->string('duration_type', 100)->nullable();
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
		Schema::drop('tenant_zone_relation');
	}

}
