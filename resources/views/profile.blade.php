@extends('layouts.app')
@section('title', 'Profile | Tasks for Today')
@section('eyebrow', 'User profile')
@section('content')
<section class="page-heading reveal"><div><p class="kicker">REFERENCE · ACCOUNT</p><h1>Profile</h1><p>The single user record seeded for this assessment.</p></div></section>
<section class="panel profile-card reveal"><div class="profile-art">{{ strtoupper(substr($user->full_name, 0, 1)) }}</div><div><p class="kicker">TASK MANAGER</p><h2>{{ $user->full_name }}</h2><div class="profile-meta"><span><strong>Username:</strong> {{ $user->username }}</span><span><strong>Email:</strong> {{ $user->email }}</span></div></div></section>
@endsection
