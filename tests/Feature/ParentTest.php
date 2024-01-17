<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ParentTest extends TestCase
{
    public function testParent()
    {
        $this->view('child', [])
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("Deskripsi")
            ->assertDontSeeText("Default Content")
            ->assertSeeText("Ini adalah halaman utama");
    }

    public function testInheritenceWithoutOverride()
    {
        $this->view('child-default', [])
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("Default Content")
            ->assertDontSeeText("Deskripsi")
            ->assertDontSeeText("Ini adalah halaman utama");
    }
}
