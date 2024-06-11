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
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('reg_id');
            $table->string('reg_reference',200)->nullable();
            $table->string('reg_name',50)->nullable();
            $table->string('reg_dob',20)->nullable();
            $table->string('reg_email',40)->nullable();
            $table->string('reg_office_email',40)->nullable();
            $table->string('reg_phone',40)->nullable();
            $table->string('reg_designation',100)->nullable();
            $table->string('reg_department',100)->nullable();
            $table->string('reg_organization',100)->nullable();
            $table->string('reg_nid_passport',100)->nullable();
            $table->string('reg_training',100)->nullable();
            $table->string('reg_training_start',20)->nullable();
            $table->string('reg_address',150)->nullable();
            $table->string('reg_sponsorship',50)->nullable();
            $table->string('reg_method',50)->nullable();
            $table->string('reg_confirm',50)->nullable();
            $table->integer('reg_editor')->nullable();
            $table->string('reg_slug',50)->nullable();
            $table->integer('reg_status')->default(1);
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
        Schema::dropIfExists('registrations');
    }
};
