<?php

namespace App\Http\Controllers;

use App\Models\Task;

class HomeController extends Controller
{
    public function index()
    {
        $tasks = Task::query()->whereDate('task_date', today())->orderBy('id')->get();
        return view('home', compact('tasks'));
    }
}
