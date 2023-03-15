<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            'name' => 'All',
        ]);
        DB::table('statuses')->insert([
            'name' => 'Active',
        ]);
        DB::table('statuses')->insert([
            'name' => 'On Hold',
        ]);
        DB::table('statuses')->insert([
            'name' => 'Completed',
        ]);
        DB::table('statuses')->insert([
            'name' => 'Cancelled',
        ]);
    }
}
