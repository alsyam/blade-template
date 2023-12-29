<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetEmpty()
    {
        $this->view("issetempty", [])
            ->assertDontSeeText("Hello")
            ->assertSeeText("I dont have any hobbies!");

        $this->view("issetempty", ["name" => "al"])
            ->assertSeeText(" Hello, my name is al")
            ->assertSeeText("I dont have any hobbies!");

        $this->view("issetempty", ["name" => "al", "hobbies" => ["game"]])
            ->assertSeeText(" Hello, my name is al")
            ->assertDontSeeText("I dont have any hobbies!");
    }
}
