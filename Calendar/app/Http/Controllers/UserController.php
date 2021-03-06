<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('events')->paginate(10);
        return view('users.index')->with([
            'users' => $users
        ]);
    }
}
