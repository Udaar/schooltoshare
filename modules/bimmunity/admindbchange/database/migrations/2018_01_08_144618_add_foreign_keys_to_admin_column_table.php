<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToAdminColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('admin_columns', function (Blueprint $table) {
            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
            $table->foreign('table_id')
                ->references('id')
                ->on('admin_tables')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
            $table->foreign('joined_table')
                ->references('id')
                ->on('admin_tables')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
            $table->unique(array('table_id','column_original_name'));
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
        Schema::table('admin_columns', function (Blueprint $table) {
            $table->dropForeign(['created_by','table_id','joined_table']);
        });
    }
}
