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
    $user = new User();
    $user->name = $name;
    $user->email = $email;
    $user->role_id = 2;
    $user->password = bcrypt($password);
    $user->save();

    return ("welcome Users");

    }
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $validatedData['email'];
        $password = $validatedData['password'];

        if(empty($email) || empty($password)) {
            return redirect('/signup');
        }

        $user = User::where('email', $email)->first();

        if($user) {
            if(password_verify($password, $user->password)) {

                session(['id' => $user->id]);
                session(['role_id' => $user->role_id]);
                //    dd(session('role_id'));
                session(['name' => $user->name]);
                    // dd(session('id'));

                return redirect('/');
            }
        }

        return redirect('/signin');
    }

    public function resetpassword()
    {
        return view('forgot-password');
    }


}
