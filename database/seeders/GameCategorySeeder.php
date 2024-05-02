<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('game_categories')->insert([
            [
                'name' => 'Live Pachinko',
                'slug' => 'live-pachinko'
            ],
            [
                'name' => 'Live Casino',
                'slug' => 'live-casino'
            ],
            [
                'name' => 'Live Cockfighting',
                'slug' => 'live-cockfighting'
            ],
        ]);
    }
}
