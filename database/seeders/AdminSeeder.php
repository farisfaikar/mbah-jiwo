<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminCount = User::where('role', 'admin')->count();

        if ($adminCount > 0) {
            Admin::factory($adminCount)->create([
                'user_id' => function () {
                    return User::where('role', 'admin')->pluck('id')->random();
                },
            ]);
        }
    }
}
