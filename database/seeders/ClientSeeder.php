<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'user_id' => 5,
            'name' => 'Bambang Subambang',
            'interests' => 'Basketball, Football',
        ]);

        Client::create([
            'user_id' => 6,
            'name' => 'Bambang Subambang',
            'interests' => 'Basketball, Football',
        ]);
    }
}
