<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowAboutPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_about_page()
    {
        // Lakukan HTTP GET request ke route atau URL yang menampilkan halaman "About"
        $response = $this->get('/about');

        // Pastikan response dari request memiliki status 200 (OK)
        $response->assertStatus(200);

        // Pastikan bahwa response berisi teks atau elemen yang menunjukkan bahwa ini adalah halaman "About"
        $response->assertSee('About Us');
        // Anda dapat menyesuaikan asser ini sesuai dengan konten yang seharusnya ada di halaman "About"
    }
}
