<?php

namespace App\Http\Controllers;

use App\Classes\Mahmoud;

use App\Classes\mmmm;

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
            return ($user);
    }
    public function loginByName($username , $pass){
        $user = users::where([
            ['username', '=', $username],
            ['pass', '=', $pass],
            ])->firstorfail();
            
            // dd('user');
            // $user = $user->toJson();
            return ($user);
    }
    public function test(){
        $list = array("facebook","twitter","instgram","youtube");
        $test = new Mahmoud();
        foreach($list as $arr){
            echo $test->serverSite($arr);
        }        
    }

    
}

