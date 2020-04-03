<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\users;

class RegisterController extends Controller
{
    //
        function register($type , $username , $email ,$pass){
            // $valid = new ValidationController();
            // $validator = $valid->va($username , $email , $type , $pass);
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
                // return redirect('/')
                //             ->withErrors($validator)
                //             ->withInput();
                echo"not valid";
            }
             else{
                $user = new users();
                $user->username = $username;
                $user->email = $email;
                $user->type = $type;
                $user->pass = $pass;
                $user->save();
                echo"tmam";
             } 

            // dd($request->all());
        }

        public function getRegisters(){
            $users  = users::all();
            // $users = $users->toJson();
            // dd('users');
            return ($users);
    
        }
    
    
}

// $valid = new ValidationController();

         