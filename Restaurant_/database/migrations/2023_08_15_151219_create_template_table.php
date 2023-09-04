<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('template', function (Blueprint $table) {
            $table->id();
            $table->string("contact_bigtitle")->nullable();
            $table->string("contact_title")->nullable();
            $table->string("contact_description")->nullable();
            $table->string("contact_address")->nullable();
            $table->string("contact_email")->nullable();
            $table->string("contact_phone")->nullable();
            $table->string("contact_map")->nullable();
            $table->string("about_bigtitle")->nullable();
            $table->string("about_img")->nullable();
            $table->string("about_title")->nullable();
            $table->string("about_description")->nullable();
            $table->string("about_video")->nullable();
            $table->string("home_title")->nullable();
            $table->string("home_description")->nullable();
            $table->string("home_story_video")->nullable();
            $table->string("home_story_title")->nullable();
            $table->string("home_story_description")->nullable();
            $table->string("footer_description")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template');
    }
};
