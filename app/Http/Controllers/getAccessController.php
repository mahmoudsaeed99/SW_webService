<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class getAccessController extends Controller
{
    //
    function loginByEmail($email , $pass){
        $user = users::where([
            ['email', '=', $email],
            ['pass', '=', $pass],
            ])->firstorfail();
            
            // dd('user');
            $user = $user->toJson();
            return view('login',compact('user'));
    }
    function loginByName($username , $pass){
        $user = users::where([
            ['username', '=', $username],
            ['pass', '=', $pass],
            ])->firstorfail();
            
            // dd('user');
            $user = $user->toJson();
            return view('login',compact('user'));
    }

    function getRegisters(){
        $users  = users::get();
        $users = $users->toJson();
        // dd('users');
        return view('getRegister',compact('users'));

    }
}
