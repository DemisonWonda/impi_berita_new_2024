<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowProfileTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_user_profile()
    {
        // Buat dummy user atau gunakan user yang ada dalam database
        $user = factory(\App\User::class)->create();

        // Lakukan HTTP GET request ke route atau URL yang menampilkan profil pengguna
        $response = $this->get('/user/profile');

        // Pastikan response dari request memiliki status 200 (OK)
        $response->assertStatus(200);

        // Pastikan bahwa response berisi data profil dari pengguna
        $response->assertSee($user->name);
        $response->assertSee($user->email);
        // Anda dapat menambahkan asser lainnya sesuai dengan data profil yang ditampilkan
    }
}
