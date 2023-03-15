<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('request_types')->insert([
            'name' => 'Project',
        ]);
        DB::table('request_types')->insert([
            'name' => 'Enhancement',
        ]);
        DB::table('request_types')->insert([
            'name' => 'Maintenance',
        ]);
    }
}
