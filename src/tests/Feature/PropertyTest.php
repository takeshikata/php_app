<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Property;
use App\Contact;
use App\Image;

class PropertyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        $response->assertStatus(200)->assertViewIs('welcome')->assertSee('Laravel');

        $response = $this->actionAs($user)->get('/tkestate');
        $response->assertStatus(200);

        $response = $this->get('/station');
        $response->assertStatus(200);

        $response = $this->get('/price');
        $response->assertStatus(200);
        //
        $response = $this->get('/search');
        $response->assertStatus(200);
    }
}
