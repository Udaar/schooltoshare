<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotifiablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifiables', function(Blueprint $table)
          {
            $table->increments('id');
            $table->integer('notification_type_id');
            $table->string('notifiable_id');
            $table->string('notifiable_type');
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
            Schema::dropIfExists('notifiables');
    }
}
