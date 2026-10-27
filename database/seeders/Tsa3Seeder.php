<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class Tsa3Seeder extends Seeder
{
    public function run(): void
    {
        User::create(['username' => 'jobymiranda', 'full_name' => 'Joby Mae M. Miranda', 'email' => 'jobymiranda@example.com']);

        Task::insert([
            ['title' => 'Review Laravel routing notes', 'status' => 'completed', 'task_date' => today(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Finish database migration exercise', 'status' => 'in progress', 'task_date' => today(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Test the task dashboard', 'status' => 'pending', 'task_date' => today(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Prepare tomorrow morning checklist', 'status' => 'pending', 'task_date' => today()->addDay(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Read the Eloquent documentation', 'status' => 'pending', 'task_date' => today()->addDay(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Submit the assessment repository', 'status' => 'pending', 'task_date' => today()->addDays(2), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Organize project screenshots', 'status' => 'completed', 'task_date' => today()->subDay(), 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Check previous assessment feedback', 'status' => 'completed', 'task_date' => today()->subDays(2), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
