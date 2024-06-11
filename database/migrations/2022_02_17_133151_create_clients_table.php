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
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('client_id');
            $table->string('client_name',50)->nullable();
            $table->string('client_url',100)->nullable();
            $table->string('client_logo',50)->nullable();
            $table->integer('client_order')->nullable();
            $table->integer('client_publish')->default(1);
            $table->integer('client_creator')->nullable();
            $table->integer('client_editor')->nullable();
            $table->string('client_slug',50)->nullable();
            $table->integer('client_status')->default(1);
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
        Schema::dropIfExists('clients');
    }
};
