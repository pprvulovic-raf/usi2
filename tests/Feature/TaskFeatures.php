<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskFeatures extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_zadaci()
    {
        $response = $this->getJson('/api/zadaci');

        $response->assertJsonCount(6);
    }
}
