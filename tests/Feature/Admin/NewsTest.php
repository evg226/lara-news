<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCheckNewsList()
    {
        $response = $this->get(route('admin.news'));

        $response->assertStatus(200);
    }

    public function testCheckCreateNews()
    {
        $response = $this->get(route('admin.news.create'));

        $response->assertStatus(200);
    }

    public function testCheckAdminNewsStore()
    {
        $data = [
            'title' => 'Some title',
            'author' => 'Some author',
            'description' => 'Some Description',
            'status' => 'Draft'
        ];
        $response = $this->post(route('admin.news.store'), $data);

        $response->assertJson($data)->assertStatus(200);
    }

    public function testCheckAdminNewsText()
    {
        $text='News List';
        $response = $this->get(route('admin.news'));

        $response->assertSeeText($text)->assertStatus(200);
    }

}
