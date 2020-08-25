<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\users;

// class ProxyTest{

//     function t(){
//         echo'enter successfully';
//     }
// }

class LoginController extends Controller
{
    //
    public function login($logIn , $pass){
        $v=[
            'login' => $logIn
        ];
        $validator = \Validator::make($v, [
            'login' => 'email'
        ]);
        if ($validator->fails()) {
            $user = users::where([
                ['username', '=', $logIn],
                ['pass', '=', $pass],
                ])->get();
                
                // dd('user');
                // $user = $user->toJson();
                session_start();
                if($user == []){
                    return $user->toJson();
                }
                echo $user;
                // $_SESSION['login'] = $user->type;
                // return ($user);
            
        }
        else{
            $user = users::where([
                ['email', '=', $logIn],
                ['pass', '=', $pass],
                ])->firstorfail();
                
                // dd('user');
                // $user = $user->toJson();
                session_start();
                $_SESSION['login'] = $user->type;
                return ($user);
        }
       
    }
    

    
}

