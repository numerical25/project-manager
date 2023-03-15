<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Subscription;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscription = Subscription::where([])->first();
        $role = Role::where(['name'=>'Admin'])->first();
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'company_name'=> 'Admin Company',
            'terms_of_service'=> 1,
            'email' => 'anthonylgordon25@gmail.com',
            'subscription_id' => $subscription->fresh()->id,
            'role_id' => $role->id,
            'api_token' => \Illuminate\Support\Str::random(60),
            'password' => Hash::make('password'),
        ]);
    }
}
