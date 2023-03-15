<?php

namespace Database\Seeders;

use App\Models\Ability;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleAbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abilities = Ability::where([])->get();
        $role = Role::where(['name' => 'Admin'])->first();
        foreach($abilities as $ability) {
            DB::table('role_ability')->insert([
                'role_id' => $role->id,
                'ability_id' => $ability->id
            ]);
        }
    }
}
