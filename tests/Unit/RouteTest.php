<?php

namespace Tests\Unit;

use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * Testing routes.
     */
    public function test_route_landing_page(): void
    {
        // Act
        $response = $this->get(route('landing-page'));

        $response->assertStatus(200);
    }
    
    public function test_route_contact_us(): void
    {
        // Act
        $response = $this->get(route('contact-us'));

        // Assert
        $response->assertStatus(200);
    }
}
