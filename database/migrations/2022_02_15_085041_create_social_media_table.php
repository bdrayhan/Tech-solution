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
        Schema::create('social_media', function (Blueprint $table) {
            $table->bigIncrements('sm_id');
            $table->text('sm_facebook')->nullable();
            $table->text('sm_twitter')->nullable();
            $table->text('sm_linkedin')->nullable();
            $table->text('sm_instagram')->nullable();
            $table->text('sm_youtube')->nullable();
            $table->text('sm_pinterest')->nullable();
            $table->text('sm_flickr')->nullable();
            $table->text('sm_vimeo')->nullable();
            $table->text('sm_skype')->nullable();
            $table->text('sm_rss')->nullable();
            $table->integer('sm_editor')->nullable();
            $table->string('sm_slug',50)->nullable();
            $table->integer('sm_status')->default(1);
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
        Schema::dropIfExists('social_media');
    }
};
