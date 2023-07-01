<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'user_id' => 3,
            'authorization' => 'From no one',
            'defcon' => 1,
        ]);

        Admin::create([
            'user_id' => 4,
            'authorization' => 'You now who',
            'defcon' => 2,
        ]);
    }
}
