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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->foreignId('language_id')
                ->constrained('languages');
            $table->boolean('status')->default(false);
            $table->string('game_category');
            $table->string('game_type');
            $table->boolean('is_featured')->default(false);
            $table->date('released_date');
            $table->string('volatility');
            $table->string('rtp');
            $table->string('maximum_win');
            $table->string('region');
            $table->string('theme');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
