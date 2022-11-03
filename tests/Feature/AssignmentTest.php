<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AssignmentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_post_creates_new_assignment()
    {
        $this->post('/assignments', [
            'title' => 'My great assignment',
        ]);

        $this->assertDatabaseHas('assignments', [
            'title' => 'My great assignment',
        ]);
    }

    public function test_list_page_shows_all_assignments()
    {
        $assignment = Assignment::create([
            'title' => 'My great assignment',
        ]);

        $this->get('/assignment')
             ->assertSee('My great assignment');
    }
}
