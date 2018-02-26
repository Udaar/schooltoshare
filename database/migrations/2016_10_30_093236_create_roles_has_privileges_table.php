<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesHasPrivilegesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles_has_privileges', function(Blueprint $table)
		{
			$table->integer('roles_id')->unsigned()->index('fk_roles_has_previliges_roles1_idx');
			$table->integer('previliges_id')->unsigned()->index('fk_roles_has_previliges_previliges1_idx');
			$table->timestamps();
			$table->softDeletes();
			$table->primary(['roles_id','previliges_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roles_has_privileges');
	}

}
