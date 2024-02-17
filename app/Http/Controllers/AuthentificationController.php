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

    return redirect('/signin');

    }
    public function login(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Retrieve input values
        $email = $validatedData['email'];
        $password = $validatedData['password'];

        if(empty($email) || empty($password)) {
            return redirect('/signup');
        }

        $user = User::where('email', $email)->first();

        if($user) {
            // Verify the password
            if(password_verify($password, $user->password)) {

                session(['id' => $user->id]);
                session(['name' => $user->name]);
                    // dd(session('id'));

                return redirect('/');
            }
        }

        return redirect('/signin');
    }



}
