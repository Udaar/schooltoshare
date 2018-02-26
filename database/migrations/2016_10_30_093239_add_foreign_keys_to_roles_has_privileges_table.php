<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRolesHasPrivilegesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('roles_has_privileges', function(Blueprint $table)
		{
			$table->foreign('previliges_id', 'fk_roles_has_previliges_previliges1')->references('id')->on('privileges')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('roles_id', 'fk_roles_has_previliges_roles1')->references('id')->on('roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('roles_has_privileges', function(Blueprint $table)
		{
			$table->dropForeign('fk_roles_has_previliges_previliges1');
			$table->dropForeign('fk_roles_has_previliges_roles1');
		});
	}

}
