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
        Schema::create('guests', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nama');
            $table->boolean('hadir')->default(false)->nullable();
            $table->enum('tamu', ['pria', 'wanita'])->nullable();
            $table->enum('hubungan', ['kerabat', 'keluarga', 'pengantin'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
