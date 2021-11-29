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
    
    function memberRegistration(Request $req){
        $req->validate([
            'userName' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $user = new User;
        $user->name = $req->userName;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->type = "member";
        $user->save();

        return redirect('admindashboard');
    }

    function setting(){
        $members = User::all()->where('type', '=', 'member');
        return view('member.manage', compact('members'));
    }

    function edit($id){
        $member = User::find($id);
        return view('member.edit', compact('member'));
    }

    function update(Request $req, $id) 
    {
        $member = User::find($id);

        $req->validate([
            'userName' => 'required',
            'email' => 'required|unique:users',
        ]);

        $member->name = $req->userName;
        $member->email = $req->email;
        $member->save();

        return redirect()->route('member.manage');
    }

    function delete($id)
    {
        $member = User::find($id);
        $member->delete();
        
        session()->flash('member_delete', 'Member Deleted Successfully..!!');
        return redirect()->route('member.manage');
    }

}
