<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testViewFormLogin()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertSeeText('Sign in');
        $response->assertViewIs('login');
    }

    public function testLoginSuccess() {

        $user = new User();
        $user->name = 'luan';
        $user->email = 'admin@gmail.com';
        $user->username = 'admin@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();

        $data = [
            'email' => $user->email,
            'password' => '123456'
        ];

        $response = $this->post('/login', $data);
        $response->assertStatus(302);
        $response->assertRedirect('/admin');

        $response = $this->get('/admin');
        $response->assertSeeText('Logged in as:');
    }
}
