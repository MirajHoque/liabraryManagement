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
}
