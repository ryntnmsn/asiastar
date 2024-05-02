<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            [
                'name' => 'Free Spins',
                'slug' => 'free-spins'
            ],
            [
                'name' => 'High RTP',
                'slug' => 'high-rtp',
            ]
        ]);
    }
}
