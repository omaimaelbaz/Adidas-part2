<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthentificationController extends Controller
{
    public function signIn()
    {
        return view('signin');

    }
    public function signUp()
    {
        return view('signup');

    }
}
