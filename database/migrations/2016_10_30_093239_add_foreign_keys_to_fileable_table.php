<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFileableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fileables', function(Blueprint $table)
		{
			$table->foreign('file_id', 'fk_files_relations_files1')->references('id')->on('files')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fileables', function(Blueprint $table)
		{
			$table->dropForeign('fk_files_relations_files1');
		});
	}

}
