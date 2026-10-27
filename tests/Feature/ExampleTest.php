<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_application_returns_a_successful_response(): void
    {
        Task::create([
            'title' => 'Today task',
            'status' => 'pending',
            'task_date' => today(),
        ]);

        Task::create([
            'title' => 'Tomorrow task',
            'status' => 'pending',
            'task_date' => today()->addDay(),
        ]);

        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('Today task')
            ->assertDontSee('Tomorrow task');
    }
}
