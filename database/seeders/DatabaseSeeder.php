<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            RoleSeeder::class,
            RequestTypeSeeder::class,
            SubscriptionSeeder::class,
            UrgencySeeder::class,
            LevelOfImpactSeeder::class,
            BenefitTypeSeeder::class,
            WorkTypeSeeder::class,
            RiskLevelSeeder::class,
            UserSeeder::class,
            WorkRequestSeeder::class,
            AbilitySeeder::class,
            RoleAbilitySeeder::class,
            WorkRequestBenefitTypeSeeder::class,
            StatusSeeder::class,
            PrioritySeeder::class,
            RequireTechnicalAssistanceSeeder::class
        ]);
    }
}
