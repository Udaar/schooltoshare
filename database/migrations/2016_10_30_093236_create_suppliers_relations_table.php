<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuppliersRelationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suppliers_relations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('object_id')->nullable();
			$table->integer('supplier_id')->unsigned()->nullable()->index('fk_vendors_relations_vendors1_idx');
			$table->string('object_type', 250)->nullable();
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
		Schema::drop('suppliers_relations');
	}

}
