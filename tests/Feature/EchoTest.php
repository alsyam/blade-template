<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Person;
use Tests\TestCase;

class EchoTest extends TestCase
{
    public function testEcho()
    {
        $person = new Person();
        $person->name = "al";
        $person->address = "cimahi";

        $this->view('echo', ["person" => $person])
            ->assertSeeText("al : cimahi");
    }
}
