<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InventoryControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_route_inventory(): void
    {
        // Arrange
        $user = $this->createUser();

        // Act
        $response = $this->actingAs($user)->get(route('inventory'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewIs('inventory.inventory');
    }

    public function test_create_inventory(): void
    {
        // Arrange
        $user = $this->createUser();

        // Act
        $response = $this->actingAs($user)->get(route('create-inventory'));

        // Asert
        $response->assertStatus(200);
        $response->assertViewIs('inventory.create-inventory');
    }
    
    public function test_store_inventory(): void
    {
        // Arrange
        $user = $this->createUser();
        $items = [
            'id' => 1,
            'user_id' => $user->getKey(),
            'nama_barang' => 'Test',
            'harga_beli' => 1000000,
            'harga_jual' => 2000000,
            'kategori' => 'Sepatu',
            'jumlah_stok' => 10,
            'jumlah_terjual' => 20,
        ];

        // Act
        $response = $this->actingAs($user)->post(route('store-inventory'), $items);

        // Assert
        $response->assertStatus(302);
        $response->assertRedirect(route('inventory'));
        $this->assertDatabaseHas('inventory', $items);
    }

    public function createUser(): User
    {
        return User::factory()->create();
    }
}
