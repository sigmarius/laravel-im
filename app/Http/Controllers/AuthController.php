<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function signUp()
    {
        return view('login.sign-up');
    }
}
