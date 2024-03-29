<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersHasPrivilegesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_has_privileges', function(Blueprint $table)
		{
			$table->foreign('previliges_id', 'fk_users_has_previliges1_previliges1')->references('id')->on('privileges')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('users_id', 'fk_users_has_previliges1_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_has_privileges', function(Blueprint $table)
		{
			$table->dropForeign('fk_users_has_previliges1_previliges1');
			$table->dropForeign('fk_users_has_previliges1_users1');
		});
	}

}
