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
    public function register(Request $request){
        // dd($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
    }
    public function login(Request $request)
    {
        dd($request);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

    }
}
