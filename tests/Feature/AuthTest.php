<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * Testing authenticataion access.
     */
    use RefreshDatabase;
    public function test_unauthenticated_user_cannot_access_inventory(): void
    {
        // Act
        $response = $this->get(route('inventory'));

        // Assert
        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }

    public function test_unauthenticated_user_cannot_access_finance(): void
    {
        // Act
        $response = $this->get(route('finance'));

        // Assert
        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }
}
