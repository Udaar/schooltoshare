<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSuppliersRelationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('suppliers_relations', function(Blueprint $table)
		{
			$table->foreign('supplier_id', 'fk_vendors_relations_vendors1')->references('id')->on('suppliers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('suppliers_relations', function(Blueprint $table)
		{
			$table->dropForeign('fk_vendors_relations_vendors1');
		});
	}

}
