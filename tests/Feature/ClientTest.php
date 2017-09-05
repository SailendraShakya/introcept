<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClientTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testClientPost()
    {
    	$response = $this->json('POST', 'client/store', 
            ['name' => 'Sally',
            'gender' => 'Male',
            'phone' => '9841398441',
            'email' => 'sailendra.shakya111@gmail.com',
            'address' => 'Lalitpur, Sundhara',
            'nationality' => 'Nepali',
            'date_of_birth' => '1986/01/15',
            'education' => 'Testing',
            'contact' => 'phone']);
        $response->assertStatus('200');
    }
}
