<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_login_form(): void
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
    }

    public function test_register_form(): void
    {
        $response = $this->get(route('register'));

        $response->assertStatus(200);
    }

    public function test_landing_page(): void
    {
        $response = $this->get(route('landing-page'));

        $response->assertStatus(200);
    }

    public function test_contact_us(): void
    {
        $response = $this->get(route('contact-us'));
        $response->assertStatus(200);
    }
}
