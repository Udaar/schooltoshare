<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBimModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bim_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('building_id');
            $table->string('project_code');
            $table->string('organization_code');
            $table->string('sub_project_code')->nullable();
            $table->string('document_type_code');
            $table->string('discipline_code');
            $table->string('sub_discipline_code')->nullable();
            $table->string('level_code')->nullable();
            $table->string('urn');
            $table->text('description');
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
        Schema::dropIfExists('bim_models');
    }
}
