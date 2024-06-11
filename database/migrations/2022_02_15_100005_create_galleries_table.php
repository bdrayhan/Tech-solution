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
        Schema::create('galleries', function (Blueprint $table) {
            $table->bigIncrements('gallery_id');
            $table->integer('galcate_id')->nullable();
            $table->string('gallery_title',150)->nullable();
            $table->string('gallery_remarks',200)->nullable();
            $table->string('gallery_image',50)->nullable();
            $table->integer('gallery_order')->nullable();
            $table->integer('gallery_publish')->default(1);
            $table->integer('gallery_creator')->nullable();
            $table->integer('gallery_editor')->nullable();
            $table->string('gallery_slug',50)->nullable();
            $table->integer('gallery_status')->default(1);
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
        Schema::dropIfExists('galleries');
    }
};
