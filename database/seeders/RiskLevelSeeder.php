<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiskLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('risk_levels')->insert([
            'name' => 'High',
        ]);
        DB::table('risk_levels')->insert([
            'name' => 'Medium',
        ]);
        DB::table('risk_levels')->insert([
            'name' => 'Low',
        ]);
    }
}
