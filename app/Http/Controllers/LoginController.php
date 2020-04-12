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
    public function loginByEmail($email , $pass){
        $user = users::where([
            ['email', '=', $email],
            ['pass', '=', $pass],
            ])->firstorfail();
            
            // dd('user');
            // $user = $user->toJson();
            session_start();
            $_SESSION['login'] = $user->type;
            return ($user);
    }
    public function loginByName($username , $pass){
        $user = users::where([
            ['username', '=', $username],
            ['pass', '=', $pass],
            ])->firstorfail();
            
            // dd('user');
            // $user = $user->toJson();
            session_start();
            $_SESSION['login'] = $user->type;
            return ($user);
    }
    

    
}

