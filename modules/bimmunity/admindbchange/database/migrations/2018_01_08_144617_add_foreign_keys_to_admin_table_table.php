<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToAdminTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('admin_tables', function (Blueprint $table) {
            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
        });
        Schema::table('admin_tables', function (Blueprint $table) {
            $table->foreign('module_id')
                ->references('id')
                ->on('modules_table')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
            $table->unique(array('module_id','table_original_name'));
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('admin_tables', function (Blueprint $table) {
            $table->dropForeign(['created_by','module_id']);
        });
    }
}
