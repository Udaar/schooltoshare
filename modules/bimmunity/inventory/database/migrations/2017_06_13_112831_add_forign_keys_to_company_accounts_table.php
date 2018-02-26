<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForignKeysToCompanyAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('company_accounts', function (Blueprint $table) {
            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('account_type_id')
                ->references('id')
                ->on('account_types')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('bank_id')
                ->references('id')
                ->on('banks')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');
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
        Schema::table('company_accounts', function (Blueprint $table) {
            $table->dropForeign(['created_by','account_type_id','bank_id','company_id']);
        });
    }
}
