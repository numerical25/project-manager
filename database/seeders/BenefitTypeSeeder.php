<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BenefitTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('benefit_types')->insert([
            'name' => 'Cost Savings',
        ]);
        DB::table('benefit_types')->insert([
            'name' => 'Cost Avoidance',
        ]);
        DB::table('benefit_types')->insert([
            'name' => 'Maintenance',
        ]);
        DB::table('benefit_types')->insert([
            'name' => 'Revenue Generation',
        ]);
        DB::table('benefit_types')->insert([
            'name' => 'Compliance / Security Risk',
        ]);
        DB::table('benefit_types')->insert([
            'name' => 'Return on Investment',
        ]);
    }
}
