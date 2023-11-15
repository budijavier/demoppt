<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class UserRoleController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        return view('show.role', compact('users'));
    }
}
