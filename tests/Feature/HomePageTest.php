<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePage extends TestCase
{
    /** @test */
    public function home_return_status_ok()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
