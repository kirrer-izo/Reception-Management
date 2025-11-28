<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SecurityTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_are_redirected_to_login()
    {
        $response = $this->get('/home');

        $response->assertRedirect('/login');
    }

    public function test_authenticated_users_can_access_dashboard()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/home');

        $response->assertStatus(200);
    }
}
