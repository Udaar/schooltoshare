<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersHasPrivilegesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_has_privileges', function(Blueprint $table)
		{
			$table->integer('users_id')->unsigned()->index('fk_users_has_previliges1_users1_idx');
			$table->integer('previliges_id')->unsigned()->index('fk_users_has_previliges1_previliges1_idx');
			$table->timestamps();
			$table->softDeletes();
			$table->primary(['users_id','previliges_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_has_privileges');
	}

}
