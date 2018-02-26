<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type');
			$table->integer('phone');
            $table->integer('cell_phone');
            $table->integer('user_id');
			$table->string('address');
			$table->text('location');
            $table->string('country');
            $table->integer('user_type_id');
            $table->string('city');
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
        Schema::drop('profiles');
    }
}
