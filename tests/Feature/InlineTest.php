<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Blade;

class InlineTest extends TestCase
{
    public function testInline()
    {
        $respones = Blade::render('Hello {{ $name }}', ['name' => 'al']);
        self::assertEquals("Hello al", $respones);
    }
}
