<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * Testing login.
     */
    use RefreshDatabase;
    
    public function test_login(): void
    {
        // Arrange
        dd('anjing');
        $user = User::factory()->create();

        // Act
        $response = $this->actingAs($user)->get(route('inventory'));

        // Assert
        $response->assertStatus(200);
    }
}
