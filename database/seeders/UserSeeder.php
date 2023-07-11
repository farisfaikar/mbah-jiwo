<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete previously stored images
        $directory = storage_path('app/public/photos');
        File::deleteDirectory($directory);

        // Create the foto_profil directory again
        File::makeDirectory($directory, 0755, true);

        User::create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'photo' => fake()->image(storage_path('app/public/photos'), 200, 200, 'people', false),
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
            'photo' => fake()->image(storage_path('app/public/photos'), 200, 200, 'people', false),
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
