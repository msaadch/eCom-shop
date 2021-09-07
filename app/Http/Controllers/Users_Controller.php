<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Users_Controller extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        
        if (!$user || !Hash::check($req->password,$user->password))
        {
            return "Invalid! Username or Password.";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }    
    }
}
