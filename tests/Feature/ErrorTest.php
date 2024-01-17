<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ErrorTest extends TestCase
{
    public function testError()
    {
        $errors = [
            "name" => "Name is Required",
            "password" => "Password is Required"
        ];

        $this->withViewErrors($errors)
            ->view("error", [])
            ->assertSeeText("Name is Required")
            ->assertSeeText("Password is Required");
    }
}
