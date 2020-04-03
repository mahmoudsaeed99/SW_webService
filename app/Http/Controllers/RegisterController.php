<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\users;

class RegisterController extends Controller
{

    function validate($type , $username , $email ,$pass){
        $v=[
            'type' => $type,
            'username' => $username,
            'email' => $email,
            'pass' => $pass
        ];

    
        $validator = \Validator::make($v, [
            'type' => 'required|min:4',
            'username' => 'required|min:8',
            'email' => 'required|min:8',
            'pass' => 'required|min:8'
        ]);
        
        if ($validator->fails()) {
            return false;
        }
        else{
            return true;
        }
    }
    
        function register($type , $username , $email ,$pass){
           
           

               if(validate($type , $username , $email ,$pass)){ 
                $user = new users();
                $user->username = $username;
                $user->email = $email;
                $user->type = $type;
                $user->pass = $pass;
                $user->save();
                echo"tmam";
               }
               else{
                   echo "false";
               }
//} 

            // dd($request->all());
        }

        public function getRegisters(){
            $users  = users::all();
           
            return ($users);
    
        }
    
    
}



         