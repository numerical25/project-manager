<?php

namespace Tests\Feature;

use App\Models\Role;
use App\Models\Subscription;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create_user(): void
    {
        $subscription = Subscription::where([])->first();
        $role = Role::where(['name'=>'Admin'])->first();
        $response = $this->post('/api/user/store',[
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(50),
            'company_name'=> fake()->company(),
            'terms_of_service'=> 1,
            'email' => fake()->unique()->safeEmail(),
            'subscription_id' => $subscription->fresh()->id,
            'role_id' => $role->id,
            'password' => 'johnsmith',
        ]);
        $response = $response->getOriginalContent();
        $response = $this->get('/api/user/refresh-token',[
            'Authorization' => 'Bearer '.$response->data['token'],
            'Accept' => 'application/json',
        ]);
        $response->assertStatus(200);
    }
}
