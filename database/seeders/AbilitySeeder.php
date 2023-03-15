<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $abilities = config('abilities');
        foreach($abilities as $key => $value) {
            foreach($value as $ability) {
                DB::table('abilities')->insert([
                    'name' => $ability,
                ]);
            }
        }
    }
}
