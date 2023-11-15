<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class PostController extends Controller
{
    public function index()
    {
        $users = User::with('posts')->get();
        return view('show.post', compact('users'));
    }
}