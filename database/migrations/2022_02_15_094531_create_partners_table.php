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
        Schema::create('partners', function (Blueprint $table) {
            $table->bigIncrements('partner_id');
            $table->string('partner_title',150)->nullable();
            $table->string('partner_url',190)->nullable();
            $table->string('partner_logo',50)->nullable();
            $table->integer('partner_order')->nullable();
            $table->integer('partner_publish')->default(1);
            $table->integer('partner_creator')->nullable();
            $table->integer('partner_editor')->nullable();
            $table->string('partner_slug',50)->nullable();
            $table->integer('partner_status')->default(1);
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
        Schema::dropIfExists('partners');
    }
};
