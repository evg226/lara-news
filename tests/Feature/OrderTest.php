<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCheckOrderText()
    {
        $text='First name';
        $response = $this->get(route('order'));

        $response->assertSeeText($text)->assertStatus(200);
    }

    public function testCheckOrderStore()
    {
        $data = [
            'firstName' => 'Some title',
            'lastName' => 'Some author',
            'email'=>'er@mail.com',
            'phone'=>'79998884435',
            'description' => 'Some Description',
        ];
        $response = $this->post(route('order'), $data);
        $response->assertSeeText('success')->assertStatus(200);
    }

    public function testCheckOrderValid()
    {
        $data = [
            'lastName' => 'Some author',
        ];
        $response = $this->post(route('order'), $data);
        $response->assertSessionHasErrors(['firstName','description','email','phone']);
    }

}
