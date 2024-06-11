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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->bigIncrements('tm_id');
            $table->string('tm_name',50)->nullable();
            $table->string('tm_designation',50)->nullable();
            $table->string('tm_company',50)->nullable();
            $table->text('tm_feedback')->nullable();
            $table->string('tm_photo',50)->nullable();
            $table->integer('tm_order')->nullable();
            $table->integer('tm_feature')->default(0);
            $table->integer('tm_publish')->default(1);
            $table->integer('tm_creator')->nullable();
            $table->integer('tm_editor')->nullable();
            $table->string('tm_slug',50)->nullable();
            $table->integer('tm_status')->default(1);
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
        Schema::dropIfExists('testimonials');
    }
};
