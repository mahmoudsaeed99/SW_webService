<?php

namespace App\Http\Controllers;

use App\Classes\validator;

// use App\Classes\DB;


use Illuminate\Http\Request;

use App\Users;

class RegisterController extends Controller
{
    public function register($type , $username , $email ,$pass){
        $validator = new Validator();
        $user = new Users();
        
       if($validator->valid($type , $username , $email ,$pass)){ 
        $user->username = $username;
        $user->email = $email;
        $user->type = $type;
        $user->pass = $pass;
        $user->save();
            
        }

        else{
             echo "error";
        }

    }

    public function getRegisters(){
        $Users  = Users::all();
        return ($Users);
    
    }
}



         