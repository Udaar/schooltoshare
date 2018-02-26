<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersHasRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_has_roles', function(Blueprint $table)
		{
			$table->integer('users_id')->unsigned()->index('fk_users_has_roles_users1_idx');
			$table->integer('roles_id')->unsigned()->index('fk_users_has_roles_roles1_idx');
			$table->timestamps();
			$table->softDeletes();
			$table->primary(['users_id','roles_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_has_roles');
	}

}
