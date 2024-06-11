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
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->bigIncrements('cm_id');
            $table->string('cm_name',50)->nullable();
            $table->string('cm_phone',20)->nullable();
            $table->string('cm_email',50)->nullable();
            $table->text('cm_subject')->nullable();
            $table->text('cm_message')->nullable();
            $table->string('cm_slug',50)->nullable();
            $table->integer('cm_status')->default(1);
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
        Schema::dropIfExists('contact_messages');
    }
};
