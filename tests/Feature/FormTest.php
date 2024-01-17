<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "al",
            "admin" => true
        ]])
            ->assertSee("checked")
            ->assertSee("al")
            ->assertDontSee("readonly");

        $this->view("form", ["user" => [
            "premium" => false,
            "name" => "al",
            "admin" => false

        ]])
            ->assertDontSee("checked")
            ->assertSee("al")
            ->assertSee("readonly");
    }
}
