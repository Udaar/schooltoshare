<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sites', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 250)->nullable();
			$table->dateTime('year')->nullable();
			$table->string('address', 300)->nullable();
			$table->string('phone', 45)->nullable();
			$table->integer('category_id')->unsigned()->nullable()->index('cat');
			$table->text('emergency_info', 16777215)->nullable();
			$table->string('gps_lat', 50)->nullable();
			$table->string('gps_long', 50)->nullable();
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
		Schema::drop('sites');
	}

}
