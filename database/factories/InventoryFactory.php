<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => $this->faker->word(),
            'harga_beli' => $this->faker->numberBetween(1000000, 100000000),
            'harga_jual' => $this->faker->numberBetween(1000000, 100000000),
            'kategori' => $this->faker->word(),
            'jumlah_stok' => $this->faker->numberBetween(1, 100),
            'jumlah_terjual' => $this->faker->numberBetween(1, 100),
        ];
    }
}
