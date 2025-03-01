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
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('page_id');
            $table->string('page_name',100)->unique();
            $table->string('page_url',100)->nullable();
            $table->string('page_remarks',200)->nullable();
            $table->integer('page_creator')->nullable();
            $table->integer('page_editor')->nullable();
            $table->integer('page_order')->nullable();
            $table->integer('page_publish')->default(1);
            $table->string('page_slug',100)->nullable();
            $table->integer('page_status')->default(1);
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
        Schema::dropIfExists('pages');
    }
};
