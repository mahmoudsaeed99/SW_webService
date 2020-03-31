<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class LoginController extends Controller
{
    //
    function loginByEmail($email , $pass){
        $user = users::where([
            ['email', '=', $email],
            ['pass', '=', $pass],
            ])->firstorfail();
            
            // dd('user');
            return view('login',compact('user'));
    }
    function loginByName($username , $pass){
        $user = users::where([
            ['username', '=', $username],
            ['pass', '=', $pass],
            ])->firstorfail();
            
            // dd('user');
            return view('login',compact('user'));
    }
}
