<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'password' => bcrypt('password'),
            'role' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'id' => 2,
            'name' => 'John Doe',
            'email' => 'johndoe@mail.com',
            'password' => bcrypt('password'),
            'role' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'id' => 3,
            'name' => 'Jane Doe',
            'email' => 'janedoe@mail.com',
            'password' => bcrypt('password'),
            'role' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'id' => 4,
            'name' => 'Johnathan Doe',
            'email' => 'johnathandoe@mail.com',
            'password' => bcrypt('password'),
            'role' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'id' => 5,
            'name' => 'Nathan Doe',
            'email' => 'nathandoe@mail.com',
            'password' => bcrypt('password'),
            'role' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'id' => 6,
            'name' => 'Neuman Doe',
            'email' => 'neumandoe@mail.com',
            'password' => bcrypt('password'),
            'role' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'id' => 7,
            'name' => 'Angelina Doe',
            'email' => 'angelinadoe@mail.com',
            'password' => bcrypt('password'),
            'role' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'id' => 8,
            'name' => 'Michael Doe',
            'email' => 'michaeldoe@mail.com',
            'password' => bcrypt('password'),
            'role' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
