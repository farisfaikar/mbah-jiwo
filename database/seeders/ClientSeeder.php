<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientCount = User::where('role', 'client')->count();

        if ($clientCount > 0) {
            Client::factory($clientCount)->create([
                'user_id' => function () {
                    return User::where('role', 'client')->pluck('id')->random();
                },
            ]);
        }
    }
}
