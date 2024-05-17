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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description')
                ->nullable();;
            $table->string('slug');
            $table->boolean('status')->default(false);
            $table->string('website')
                ->nullable();
            $table->string('address')
                ->nullable();
            $table->string('country')
                ->nullable();
            $table->string('license')
                ->nullable();;
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
