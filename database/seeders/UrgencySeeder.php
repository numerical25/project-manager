<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('urgencies')->insert([
            'name' => 'Very High',
        ]);
        DB::table('urgencies')->insert([
            'name' => 'High',
        ]);
        DB::table('urgencies')->insert([
            'name' => 'Medium',
        ]);
        DB::table('urgencies')->insert([
            'name' => 'Low',
        ]);
    }
}
