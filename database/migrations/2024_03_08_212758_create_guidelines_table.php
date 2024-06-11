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
        Schema::create('guidelines', function (Blueprint $table) {
            $table->bigIncrements('guide_id');
            $table->string('guide_name',50)->nullable();
            $table->string('guide_email',40)->nullable();
            $table->string('guide_phone',20)->nullable();
            $table->text('guide_message')->nullable();
            $table->integer('guide_editor')->nullable();
            $table->string('guide_slug',50)->nullable();
            $table->integer('guide_status')->default(1);
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
        Schema::dropIfExists('guidelines');
    }
};
