<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function display()
    {
            // display all users

        $data = User::with('role')->get();
        // dd($data);
        return view('user', compact('data'));

    }

    // ajouter user

    public  function adduserpage()
    {
        $obj= new Role;
        $roledata =$obj->get();
        //  dd($roledata);
        return view('adduser',compact('roledata'));
    }



    public function insertuser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role_id' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->save();


        return redirect('/user');
    }
    public function deleteuser($id)
    {
            $user = new User();
            $user->where('id',$id)->delete();

          return redirect('/user');

    }
    public function updateview($id)
    {
        return view ('userupdate');
        
    }






}
