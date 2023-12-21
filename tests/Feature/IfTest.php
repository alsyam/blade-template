<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfTest extends TestCase
{
    public function testIf()
    {
        $this->view("if", ['hobbies' => []])
            ->assertSeeText("I dont have any hobbies!");

        $this->view("if", ['hobbies' => ["coding"]])
            ->assertSeeText("I have one hobby!");

        $this->view("if", ['hobbies' => ["coding", "game"]])
            ->assertSeeText("I have multiple hobbies!");
    }
}
