<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'id' => 2,
            'name' => 'John Doe',
            'email' => 'johndoe@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => 'client',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::factory(5)->create()->each(function ($user) {
            if ($user->role === 'client') {
                Client::factory()->create(['user_id' => $user->id]);
            } else if ($user->role === 'admin') {
                Admin::factory()->create(['user_id' => $user->id]);
            }
        });
    }
}
