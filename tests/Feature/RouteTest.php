<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBaseUrl()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testAboutPageUrl()
    {
    	$response = $this->get('about');
        $response->assertStatus(200);
    }

    public function testContactPageUrl()
    {
    	$response = $this->get('contact');
        $response->assertStatus(200);
    }
}
