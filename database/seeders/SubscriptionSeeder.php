<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subscriptions')->insert([
            'name' => 'Individual',
            'price'=>0
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'Pro',
            'price'=>5
        ]);
        DB::table('subscriptions')->insert([
            'name' => 'Enterprise',
            'price'=> 9
        ]);
    }
}
