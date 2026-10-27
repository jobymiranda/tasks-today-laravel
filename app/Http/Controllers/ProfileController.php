<?php

namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::query()->firstOrFail();
        return view('profile', compact('user'));
    }
}
