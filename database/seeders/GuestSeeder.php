<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest::create([
            'user_id' => 7,
            'name' => 'Something-Guest',
            'username' => 'guardianorsomething',
            'hobby' => 'Executions',
        ]);

        Guest::create([
            'user_id' => 8,
            'name' => 'Shithead-Guest',
            'username' => 'shithead-guest',
            'hobby' => 'Genocide',
        ]);
    }
}
