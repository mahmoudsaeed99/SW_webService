<?php

namespace App\Classes;

class Validator {

    public function valid($type , $username , $email ,$pass){
        $v=[
            'type' => $type,
            'username' => $username,
            'email' => $email,
            'pass' => $pass
        ];

    
        $validator = \validator::make($v, [
            'type' => 'required|min:4|different:admin',
            'username' => 'required|min:8',
            'email' => 'required|min:8|unique:users|email',
            'pass' => 'required|min:8'
        ]);
        
        if ($validator->fails()||$type=="admin") {
            return false;
        }
        else{
            return true;
        }
    }


}

    


?>