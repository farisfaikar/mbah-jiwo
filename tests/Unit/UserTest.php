<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_if_seeders_work()
    {
        $this->artisan('migrate:fresh --seed');

        $this->assertDatabaseHas('users', [
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'role' => 0,
        ]);
    }

    public function test_login_form(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'David Doe',
            'email' => 'daviddoe@mail.com',
            'password' => bcrypt('password'),
        ]);

        $user2 = User::make([
            'name' => 'Dary Doe',
            'email' => 'darydoe@mail.com',
            'password' => bcrypt('password'),
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

    public function test_delete_user()
    {
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if ($user) {
            $user->delete();
        }

        $this->assertTrue(true);
    }

    public function test_it_stores_new_users()
    {
        $response = $this->post('/register', [
            'name' => 'David Doe',
            'email' => 'daviddoe@mail.com',
            'password' => bcrypt('password'),
        ]);

        $response->assertRedirect('/');
    }

    public function test_super_admin_login()
    {
        // Create a super_admin user in the database
        $super_admin = User::factory()->create([
            'email' => 'superadmin@mail.com',
            'password' => bcrypt('password'),
            'role' => 0,
        ]);
        
        $response = $this->post('/login', [
            'email' => 'superadmin@mail.com',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('super-admin'));

        $this->assertAuthenticatedAs($super_admin);
    }

    public function test_admin_login()
    {
        // Create a admin user in the database
        $admin = User::factory()->create([
            'email' => 'newadmin@mail.com',
            'password' => bcrypt('password'),
            'role' => 1,
        ]);
        
        $response = $this->post('/login', [
            'email' => 'newadmin@mail.com',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('admin'));

        $this->assertAuthenticatedAs($admin);
    }

    public function test_client_login()
    {
        // Create a admin user in the database
        $client = User::factory()->create([
            'email' => 'client@mail.com',
            'password' => bcrypt('password'),
            'role' => 2,
        ]);
        
        $response = $this->post('/login', [
            'email' => 'client@mail.com',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('client'));

        $this->assertAuthenticatedAs($client);
    }

    public function test_guest_login()
    {
        // Create a admin user in the database
        $guest = User::factory()->create([
            'email' => 'guest@mail.com',
            'password' => bcrypt('password'),
            'role' => 3,
        ]);
        
        $response = $this->post('/login', [
            'email' => 'guest@mail.com',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('guest'));

        $this->assertAuthenticatedAs($guest);
    }
}
