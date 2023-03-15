<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('priorities')->insert([
            'name' => 'Cost Savings',
        ]);
        DB::table('priorities')->insert([
            'name' => 'Cost Avoidance',
        ]);
        DB::table('priorities')->insert([
            'name' => 'Maintenance',
        ]);
        DB::table('priorities')->insert([
            'name' => 'Revenue Generation',
        ]);
        DB::table('priorities')->insert([
            'name' => 'Compliance / Security Risk',
        ]);
        DB::table('priorities')->insert([
            'name' => 'Return on Investment',
        ]);
    }
}
