<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForignKeysToOrderPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('order_payments', function (Blueprint $table) {
            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');


            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('NO ACTION')
                ->onUpdate('NO ACTION');

            $table->foreign('company_account_id')
                ->references('id')
                ->on('company_accounts')
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
        Schema::table('order_payments', function (Blueprint $table) {
            $table->dropForeign(['created_by','company_id','account_type_id']);
        });
    }
}
