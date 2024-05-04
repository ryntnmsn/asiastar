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
        Schema::create('feature_game', function (Blueprint $table) {
            $table->foreignId('feature_id')
                ->constrained('features')
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
        Schema::dropIfExists('feature_game');
    }
};
