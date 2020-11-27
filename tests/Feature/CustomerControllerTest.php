<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/api/customers');

        $response->assertStatus(200);
    }

    public function testResponseDataEqualsJson()
    {
        $response = $this->get('/api/customers');

        $response->assertJSON([]);
    }
}
