<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequireTechnicalAssistanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('require_technical_assistances')->insert([
            'name' => 'Yes',
        ]);
        DB::table('require_technical_assistances')->insert([
            'name' => 'No',
        ]);
        DB::table('require_technical_assistances')->insert([
            'name' => 'Maybe',
        ]);
    }
}
