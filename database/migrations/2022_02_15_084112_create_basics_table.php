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
        Schema::create('basics', function (Blueprint $table) {
            $table->bigIncrements('basic_id');
            $table->string('basic_company',150)->nullable();
            $table->string('basic_title',190)->nullable();
            $table->string('basic_logo',70)->nullable();
            $table->string('basic_favicon',70)->nullable();
            $table->string('basic_flogo',70)->nullable();
            $table->integer('basic_editor')->nullable();
            $table->string('basic_slug',50)->nullable();
            $table->integer('basic_status')->default(1);
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
        Schema::dropIfExists('basics');
    }
};
