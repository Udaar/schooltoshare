<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('chat_groups');
        
        Schema::create('chat_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image_id');
            $table->integer('created_by')->unsigned();
            $table->timestamps();

        $table->foreign('created_by')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chat_groups');
    }
}
