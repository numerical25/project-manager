<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelOfImpactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('level_of_impacts')->insert([
            'name' => 'Minimal (1 Department)',
        ]);
        DB::table('level_of_impacts')->insert([
            'name' => 'Significant (2-4 Department)',
        ]);
        DB::table('level_of_impacts')->insert([
            'name' => 'Severe (5+ Department)',
        ]);
        DB::table('level_of_impacts')->insert([
            'name' => 'Critical (Company Wide)',
        ]);
    }
}
