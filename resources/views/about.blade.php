@extends('layouts.app')
@section('title', 'About | Tasks for Today')
@section('eyebrow', 'About the build')
@section('content')
<section class="page-heading reveal"><div><p class="kicker">ABOUT THE SYSTEM</p><h1>Organize the day.</h1><p>This is Joby's personal Tasks for Today board, rebuilt in Laravel with a real database and Eloquent retrieval.</p></div></section>
<section class="about-grid"><article class="about-card red reveal"><span>01</span><h2>Developer</h2><p>Joby Mae M. Miranda<br>IT0049 Web System Technologies</p></article><article class="about-card blue reveal"><span>02</span><h2>Architecture</h2><p>Routes connect each page to controllers, controllers query Eloquent models, and Blade views render the result.</p></article><article class="about-card yellow reveal"><span>03</span><h2>Database</h2><p>Tasks are filtered by date for the Welcome page and ordered by date for the complete Task List.</p></article><article class="about-card green reveal"><span>04</span><h2>Purpose</h2><p>A small, clear task-management system designed to make the next action visible.</p></article></section>
@endsection
