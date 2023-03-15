<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('work_types')->insert([
            'name' => 'Mandatory',
        ]);
        DB::table('work_types')->insert([
            'name' => 'Improvement',
        ]);
        DB::table('work_types')->insert([
            'name' => 'Enhancement',
        ]);
        DB::table('work_types')->insert([
            'name' => 'Bug Fix',
        ]);
    }
}
