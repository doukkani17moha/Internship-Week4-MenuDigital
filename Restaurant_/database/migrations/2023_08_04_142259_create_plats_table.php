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
        Schema::create('plats', function (Blueprint $table) {
            $table->id();
            $table->string("plat_name", 255);
            $table->text("plat_descr")->nullable();
            $table->string("plat_img", 255)->nullable();
            $table->integer("plat_price")->nullable();
            $table->string("plat_avail", 255)->nullable();
            $table->string("plat_time", 255)->nullable();
            $table->decimal("rating", 4, 2)->nullable();
            $table->unsignedBigInteger('categorie_id')->index();
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->integer("enable")->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plats');
    }
};
