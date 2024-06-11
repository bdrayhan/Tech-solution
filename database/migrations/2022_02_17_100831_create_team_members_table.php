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
        Schema::create('team_members', function (Blueprint $table) {
            $table->bigIncrements('member_id');
            $table->string('member_name',50)->nullable();
            $table->string('member_designation',50)->nullable();
            $table->string('member_facebook',190)->nullable();
            $table->string('member_twitter',190)->nullable();
            $table->string('member_linkedin',190)->nullable();
            $table->string('member_instagram',190)->nullable();
            $table->string('member_photo',50)->nullable();
            $table->integer('member_order')->nullable();
            $table->integer('member_creator')->nullable();
            $table->integer('member_editor')->nullable();
            $table->string('member_slug',50)->nullable();
            $table->integer('member_status')->default(1);
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
        Schema::dropIfExists('team_members');
    }
};
