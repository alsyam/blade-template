<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view("include", [])
            ->assertSeeText("Alsyam")
            ->assertSeeText("halo")
            ->assertSeeText("hay");

        $this->view("include", ["title" => "cuy"])
            ->assertSeeText("cuy")
            ->assertSeeText("halo")
            ->assertSeeText("hay");
    }
}
