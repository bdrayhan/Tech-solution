<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('project_id');
            $table->integer('procate_id')->nullable();
            $table->string('project_title',100)->nullable();
            $table->string('project_url',150)->nullable();
            $table->string('project_remarks',250)->nullable();
            $table->string('project_image',50)->nullable();
            $table->integer('project_order')->nullable();
            $table->integer('project_feature')->default(0);
            $table->integer('project_publish')->default(1);
            $table->integer('project_creator')->nullable();
            $table->integer('project_editor')->nullable();
            $table->string('project_slug',50)->nullable();
            $table->integer('project_status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
