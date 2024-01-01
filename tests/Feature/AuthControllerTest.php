<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

    }

    use RefreshDatabase;

    public function testUserRegistration()
    {
        $response = $this->post('/register', [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'gender' => 'male',
            'dob' => '1990-01-01',
        ]);

//        dd($response);
        $response->assertStatus(302); // Assuming redirect after registration

        // Add more assertions based on your specific application logic
        // For example, check if the user was actually stored in the database
        $this->assertDatabaseHas('users', ['email' => 'john.doe@example.com']);
    }

}
