<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProtectedAccountRoutesTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_is_redirected_from_customer_routes_to_login(): void
    {
        $this->get(route('customers.index'))
            ->assertRedirect(route('login'));
    }

    public function test_guest_is_redirected_from_user_routes_to_login(): void
    {
        $this->get(route('users.index'))
            ->assertRedirect(route('login'));
    }

    public function test_authenticated_user_can_open_customer_index(): void
    {
        $user = User::factory()->create([
            'username' => 'tester',
            'full_name' => 'Test User',
        ]);

        $this->actingAs($user)
            ->get(route('customers.index'))
            ->assertOk();
    }

    public function test_authenticated_user_can_open_user_index(): void
    {
        $user = User::factory()->create([
            'username' => 'tester',
            'full_name' => 'Test User',
        ]);

        $this->actingAs($user)
            ->get(route('users.index'))
            ->assertOk();
    }
}
