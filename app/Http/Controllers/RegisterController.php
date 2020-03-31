<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\users;

class RegisterController extends Controller
{
    //
    function register($type , $username , $email , $password){
        $valid = new ValidationController();
        $bool = $valid->va($username , $email , $type , $password);
        if($bool == true){
            $user = new users();
            $user->username = $username;
            $user->email = $email;
            $user->type = $type;
            $user->pass = $password;
            $user->save();

            
        } 

        
    }
    function getRegisters(){
        $users  = users::get();
        return view('getRegister',compact('users'));

    }
    
}
