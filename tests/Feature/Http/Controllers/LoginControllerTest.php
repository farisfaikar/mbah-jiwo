<?php

namespace Tests\Feature;

use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginControllerTest extends TestCase
{
    /**
     * Testing login.
     */
    use RefreshDatabase;
    
    public function test_login(): void
    {
        // Arrange
        $user = $this->createUser();

        // Act
        $response = $this->actingAs($user)->get(route('inventory'));

        // Assert
        $response->assertStatus(200);
    }

    public function test_logout(): void
    {
        // Arrange
        $this->withoutMiddleware(VerifyCsrfToken::class);
        $user = $this->createUser();

        // Act
        $response = $this->actingAs($user)->post(route('logout'));

        // Assert
        $response->assertStatus(302);
        $response->assertRedirect(route('landing-page'));
    }

    private function createUser(): User
    {
        return User::factory()->create();
    }
}
