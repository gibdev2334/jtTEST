<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    // test des routes en remplacant users (sites=articles) pour vestiges 
//     public function testAccessAdminWithGuestRole()
//     {
//         $response = $this->get('/admin/users');
//         $response->assertRedirect('/login');
//     }

//     public function testAccessAdminWithAdminRole()
//     {
//         $admin = Auth::loginUsingId(1);
//         // dd($admin);
//         $this->actingAs($admin);

//         $response-> $this->get('/admin/users');
//         // dd($response);
//         // dd($response->getStatusCode());
//         $response->assertStatus(200);
//     }
}
