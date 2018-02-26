<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFileablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fileables', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('file_id')->unsigned()->nullable()->index('fk_files_relations_files1_idx');
			$table->integer('fileable_id')->unsigned()->nullable();
			$table->string('fileable_type', 300)->nullable();
			$table->boolean('is_profile')->nullable();
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
		Schema::drop('fileables');
	}

}
