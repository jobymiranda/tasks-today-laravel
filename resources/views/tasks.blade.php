@extends('layouts.app')
@section('title', 'Task List | Tasks for Today')
@section('eyebrow', 'Complete task list')
@section('content')
<section class="page-heading reveal"><div><p class="kicker">WORKSPACE · ALL TASKS</p><h1>Task list</h1><p>Every seeded task, ordered by its assigned date.</p></div><span class="count-badge">{{ count($tasks) }} tasks</span></section>
<section class="toolbar reveal"><label class="search-box"><span>⌕</span><input type="search" placeholder="Search tasks" data-search-input="taskTable"></label><span>Eloquent records ordered by date</span></section>
<section class="panel table-panel reveal"><div class="table-wrap"><table id="taskTable"><thead><tr><th>Task</th><th>Status</th><th>Task date</th></tr></thead><tbody>@foreach($tasks as $task)<tr data-search-item="{{ strtolower($task->title . ' ' . $task->status . ' ' . $task->task_date->format('F j Y')) }}"><td><strong>{{ $task->title }}</strong></td><td><span class="task-status {{ str_replace(' ', '-', $task->status) }}">{{ $task->status }}</span></td><td>{{ $task->task_date->format('F j, Y') }}</td></tr>@endforeach</tbody></table></div></section>
@endsection
