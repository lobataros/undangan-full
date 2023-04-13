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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id');
            $table->string('nama');
            $table->boolean('hadir')->default(false);
            $table->string('uuid')->nullable();
            $table->text('komentar')->nullable();
            $table->string('ip')->nullable();
            $table->text('user_agent')->nullable();
            $table->string('parent_id')->nullable();
            // $table->foreign('user_id')->references('id')->on('users');

            $table->timeStamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
