<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('themes')->insert([
            [
                'name' => 'Table Games',
                'slug' => 'table-games',
            ],
            [
                'name' => 'Music',
                'slug' => 'music',
            ],
            [
                'name' => 'Chinese',
                'slug' => 'chinese',
            ],
            [
                'name' => 'European',
                'slug' => 'european',
            ],
            [
                'name' => 'Asian',
                'slug' => 'asian',
            ],
        ]);
    }
}
