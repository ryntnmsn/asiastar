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
            $table->longText('description')
                ->nullable();
            $table->foreignId('language_id')
                ->constrained('languages')
                ->cascadeOnDelete();
            $table->foreignId('provider_id')
                ->constrained('providers')
                ->cascadeOnDelete()
                ->nullable();
            $table->boolean('status')->default(false);
            $table->foreignId('game_category_id')
                ->constrained('game_categories')
                ->cascadeOnDelete()
                ->nullable();
            $table->foreignId('game_type_id')
                ->constrained('game_types')
                ->cascadeOnDelete()
                ->nullable();
            $table->boolean('is_featured')->default(false);
            $table->date('released_date')
                ->nullable();
            $table->string('volatility')
                ->nullable();
            $table->string('rtp')
                ->nullable();
            $table->string('maximum_win')
                ->nullable();
            $table->string('region');
            $table->string('image_square');
            $table->string('image_vertical');
            $table->string('image_horizontal');
            $table->string('hero_image');
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
