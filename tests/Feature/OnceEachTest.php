<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OnceEachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", [
            "users" =>
            [
                "name" => "al",
                "hobbies" => ["coding", "gaming"]
            ],
            [
                "name" => "syam",
                "hobbies" => ["coding", "gaming"]
            ]
        ])
            ->assertSeeInOrder([
                ".red",
                "al",
                "coding",
                "gaming",
                "syam",
                "coding",
                "gaming"
            ]);
    }
}
