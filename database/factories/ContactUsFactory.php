<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactUs>
 */
class ContactUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'email' => fake()->safeEmail(),
            'perihal' => fake()->randomElement(['Pelayanan Pelanggan', 'Umpan Balik']),
            'judul' => fake()->text(10),
            'pesan' => fake()->text(),
            'created_at' => now(),
        ];
    }
}
