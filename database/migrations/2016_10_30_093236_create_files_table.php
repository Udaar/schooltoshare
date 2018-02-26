<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 250)->nullable();
			$table->string('extension', 10)->nullable();
			$table->string('type', 50)->nullable();
			$table->string('path', 500)->nullable();
			$table->integer('category_id')->unsigned()->nullable()->index('cat');
			$table->integer('folder_id')->unsigned()->nullable()->index('folder');
			$table->integer('size')->unsigned()->nullable();
			$table->integer('created_by')->nullable();
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
		Schema::drop('files');
	}

}
