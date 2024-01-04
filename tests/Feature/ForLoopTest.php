<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForLoopTest extends TestCase
{
    public function testFor()
    {
        $this->view("ForLoop", ["limit" => 10])
            ->assertSeeText("0")
            ->assertSeeText("1")
            ->assertSeeText("2")
            ->assertSeeText("3")
            ->assertSeeText("4")
            ->assertSeeText("5")
            ->assertSeeText("6")
            ->assertSeeText("7")
            ->assertSeeText("8")
            ->assertSeeText("9");
    }

    public function testForeach()
    {
        $this->view("foreach", ["hobbies" => ["Coding", "Gaming"]])
            ->assertSeeText("Coding")
            ->assertSeeText("Gaming");
    }

    public function testForelse()
    {

        $this->view("forelse", ["hobbies" => ["Coding", "Gaming"]])
            ->assertSeeText("Coding")
            ->assertSeeText("Gaming")
            ->assertDontSeeText("Tidak punya hobi");

        $this->view("forelse", ["hobbies" => []])
            ->assertDontSeeText("Coding")
            ->assertDontSeeText("Gaming")
            ->assertSeeText("Tidak punya hobi");
    }
}
