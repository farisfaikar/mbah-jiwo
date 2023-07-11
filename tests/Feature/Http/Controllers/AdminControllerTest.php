<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    
    public function test_route_admin(): void
    {
        // Arrange
        $user = $this->createUser();

        // Act
        $response = $this->actingAs($user)->get(route('admin'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewIs('admin.admin');
    }

    public function test_route_admin_for_unauthorized_users(): void
    {
        // Act
        $response = $this->get(route('admin'));
        
        // Assert
        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }

    private function createUser(): User
    {
        $user = User::factory(1)->state(['role' => 'admin'])->create()->first();
        Admin::factory()->create(['user_id' => $user->id]);
        
        return $user;
    }
}
