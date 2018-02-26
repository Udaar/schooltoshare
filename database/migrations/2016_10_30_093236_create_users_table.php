<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 300)->nullable();
			$table->string('email', 45)->unique('email_UNIQUE');
			$table->string('phone', 45)->nullable();
			$table->integer('perent_id')->nullable();
			$table->string('cell_phone', 45)->nullable();
			$table->string('address', 300)->nullable();
			$table->string('password', 100)->nullable();
			$table->string('picture', 255)->nullable();
			$table->text('remember_token')->nullable();
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
		Schema::drop('users');
	}

}
