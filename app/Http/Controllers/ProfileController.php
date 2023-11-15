<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 


class ProfileController extends Controller
{
    public function index()
    {
        $users = User::with('profile')->get();
        return view('show.profile', compact('users'));
    }
}

