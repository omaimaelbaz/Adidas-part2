<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
         // Create a new user
    $user = new User();
    $user->name = $name;
    $user->email = $email;
    $user->password = bcrypt($password);
    $user->save();

    return redirect('/singin');

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
