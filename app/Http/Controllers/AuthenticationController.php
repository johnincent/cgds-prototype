<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function graduates()
    {
        return view('graduates');
    }
}
