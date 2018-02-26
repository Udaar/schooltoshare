<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('files', function(Blueprint $table)
		{
			$table->foreign('category_id', 'fk_files_category1')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('folder_id', 'fk_files_folders')->references('id')->on('folders')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('files', function(Blueprint $table)
		{
			$table->dropForeign('fk_files_category1');
			$table->dropForeign('fk_files_folders');
		});
	}

}
