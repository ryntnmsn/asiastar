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
        Schema::create('available_language_game', function (Blueprint $table) {
            $table->foreignId('available_language_id')
                ->constrained('available_languages')
                ->cascadeOnDelete();
            $table->foreignId('game_id')
                ->constrained('games')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('available_language_game');
    }
};
