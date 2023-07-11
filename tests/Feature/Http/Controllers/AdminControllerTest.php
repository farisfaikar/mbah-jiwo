<?php

namespace Tests\Feature;

use App\Http\Middleware\VerifyCsrfToken;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    
    public function test_route_admin(): void
    {
        // Arrange
        $user = $this->createUser();

        // Act
        $response = $this->actingAs($user)->get(route('admin'));

        // Assert
        $response->assertStatus(200);
        $response->assertViewIs('admin.admin');
    }

    public function test_route_admin_for_unauthorized_users(): void
    {
        // Act
        $response = $this->get(route('admin'));
        
        // Assert
        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }

    public function test_store_admin(): void
    {
        // Arrange
        $user = $this->createUser();
        $this->withoutMiddleware(VerifyCsrfToken::class);
        
        Storage::fake('photos');
        $file = UploadedFile::fake()->image('photo.jpg');

        $user_data = [
            'name' => 'John Doe',
            'email' => 'johndoe@mail.com',
            'photo' => $file,
            'role' => 'admin',
        ];

        $admin_data = [
            'user_id' => $user->id + 1,  // TODO This is hard coded, will not work with UUID
            'job' => 'Developer',
            'salary' => 10000000,
        ];
        
        $request_data = array_merge($user_data, $admin_data);

        // Act
        $response = $this->actingAs($user)->post(route('store-user'), $request_data);

        // Assert
        $response->assertStatus(302);
        $response->assertRedirect(route('user'));
        $user_data['photo'] = $file->hashName();
        $this->assertDatabaseHas('users', $user_data);
        $this->assertDatabaseHas('admins', $admin_data);
    }
    
    private function createUser(): User
    {
        $user = User::factory(1)->state(['role' => 'admin'])->create()->first();
        Admin::factory()->create(['user_id' => $user->id]);
        
        return $user;
    }
}
