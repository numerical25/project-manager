<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subscription = Subscription::where([])->first();
        $role = Role::where(['name'=>'Admin'])->first();
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'company_name'=> fake()->company(),
            'terms_of_service'=> 1,
            'email' => fake()->unique()->safeEmail(),
            'subscription_id' => $subscription->fresh()->id,
            'role_id' => $role->id,
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
