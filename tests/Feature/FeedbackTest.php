<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FeedbackTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCheckFeedbackText()
    {
        $text='First name';
        $response = $this->get(route('feedback'));

        $response->assertSeeText($text)->assertStatus(200);
    }

    public function testCheckFeedbackStore()
    {
        $data = [
            'firstName' => 'Some title',
            'lastName' => 'Some author',
            'description' => 'Some Description',
        ];
        $response = $this->post(route('feedback'), $data);
        $response->assertSeeText('success')->assertStatus(200);
    }

    public function testCheckFeedbackValid()
    {
        $data = [
            'lastName' => 'Some author',
        ];
        $response = $this->post(route('feedback'), $data);
        $response->assertSessionHasErrors(['firstName','description']);
    }
}
