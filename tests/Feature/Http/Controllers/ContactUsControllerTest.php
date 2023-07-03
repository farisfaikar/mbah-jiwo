<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactUsControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_route_contact_us(): void
    {
        // Act
        $response = $this->get(route('contact-us'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewIs('contact-us');
    }

    public function test_store_contact_us(): void
    {
        // Arrange
        $information = [
            'nama' => 'John Doe',
            'email' => 'johndoe@mail.com',
            'perihal' => 'Testing Contact Us',
            'judul' => 'Contact Us',
            'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, adipiscing.',
        ];
        
        // Act
        $response = $this->post(route('store-contact-us'), $information);

        // Assert
        $response->assertStatus(302);
        $response->assertRedirect(route('landing-page'));
        $this->assertDatabaseHas('contact_us', $information);
    }
}
