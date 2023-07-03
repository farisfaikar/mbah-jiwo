<?php

namespace Tests\Feature;

use App\Models\Inventory;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FinanceControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_route_finance(): void
    {
        // Arrange
        $user = User::factory()->create();

        Inventory::factory()->create([
            'user_id' => $user->getKey(),
            'harga_beli' => 10000,
            'harga_jual' => 20000,
            'jumlah_stok' => 5,
            'jumlah_terjual' => 2,
        ]);

        Inventory::factory()->create([
            'user_id' => $user->getKey(),
            'harga_beli' => 15000,
            'harga_jual' => 25000,
            'jumlah_stok' => 10,
            'jumlah_terjual' => 3,
        ]);
        

        // Act
        $response = $this->actingAs($user)->get('/finance');

        // Assert
        $response->assertStatus(200);
        $response->assertViewIs('finance');
        $response->assertViewHas([
            'title' => 'Finance',
            'totalPengeluaran' => 265000,
            'totalPemasukan' => 115000,
            'totalKeuntungan' => -150000,
        ]);
    }
}
