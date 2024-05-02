<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('game_types')->insert([
            [
                'name' => 'New Game',
                'slug' => 'new-game'
            ],
            [
                'name' => 'Hot Game',
                'slug' => 'hot-game'
            ],
            [
                'name' => 'Coming Soon',
                'slug' => 'coming-soon'
            ],
        ]);
    }
}
