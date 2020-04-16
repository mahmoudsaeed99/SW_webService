<?php

namespace App\Http\Controllers;

use App\Classes\BlockUsers;
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
            
            $checkBlock = new BlockUsers();
            session_start();
            if(isset($_SESSION['login'])){

                if($checkBlock->blockSite($_SESSION['login'])){
                    $Users  = Users::all();
                    echo $_SESSION['login'];
                    return ($Users);
                }
                else{
                    return ("this site is blocked for you");   
                }
            }
    
    }
}



         