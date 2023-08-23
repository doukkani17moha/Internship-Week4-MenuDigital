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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string("reserv_name");
            $table->string("reserv_email")->nullable();
            $table->string("reserv_phone")->nullable();
            $table->string("no_guest")->nullable();
            $table->string("reserv_date")->nullable();
            $table->string("reserv_time")->nullable();
            $table->longText("reserv_msg")->nullable();
            $table->integer("status")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
