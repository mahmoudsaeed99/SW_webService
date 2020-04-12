<?php

namespace App\Http\Controllers;

use App\Classes\BlockUsers;


use Illuminate\Http\Request;

use App\users;

class RegisterController extends Controller
{

    //validation method 
    public function valid($type , $username , $email ,$pass,$user){
        $v=[
            'type' => $type,
            'username' => $username,
            'email' => $email,
            'pass' => $pass
        ];

    
        $validator = \Validator::make($v, [
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
    // this method used to save data in the db
    public function saveData($type , $username , $email ,$pass,$user){
                $user->username = $username;
                $user->email = $email;
                $user->type = $type;
                $user->pass = $pass;
                $user->save();

    }
    public function register($type , $username , $email ,$pass){
        $user = new users();
        
       if($this->valid($type , $username , $email ,$pass,$user)){ 
            
            $this->saveData($type , $username , $email ,$pass,$user);

                
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
                    $users  = users::all();
                    return ($users);
                }
                else{
                    return ("this site is blocked for you");   
                }
            }
    
        }
    
        // public function test(){
        //     $list = array("facebook","twitter","instgram","youtube");
            
        //     foreach($list as $arr){
        //         echo $test->serverSite($arr);
        //     }        
        // }
}



         