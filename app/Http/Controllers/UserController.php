<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function registration(Request $req){
        $req->validate([
            'userName' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $user = new User;
        $user->name = $req->userName;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->type = "admin";
        $user->save();

        return redirect('login');
    }

    function logIn(Request $req){
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !$req->password = $user->password){
            return "User Name or Password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/admindashboard');
        }
    }
}
