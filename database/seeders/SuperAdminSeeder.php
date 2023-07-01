<?php

namespace Database\Seeders;

use App\Models\SuperAdmin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SuperAdmin::create([
            'user_id' => 1,
            'cool_name' => 'Superhawt-super_admin',
            'cool_level' => 'Yea, that\'s right bitch',
        ]);

        SuperAdmin::create([
            'user_id' => 2,
            'cool_name' => 'Gigachad-super_admin',
            'cool_level' => 'You\'r in my house now',
        ]);
    }
}
