<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ValidationController extends Controller
{

    public function va($type , $username , $email , $password){

        // $validator = $username->validate();
        if($username =='required|max:100|min:8'){
            return redirect('/')->withErrors("name not required")->withInput();
        }
        else if($email =='required|unique:users|regex:/^.+@.+$/i'){
            return redirect('/')->withErrors("email not required")->withInput();
        }
        else if($type == 'required|max:10|min:6|not:admin'){
            return redirect('/')->withErrors("type not required")->withInput();
        }
        else if($password =='required|max:18|min:8'){
            return redirect('/')->withErrors("password not required")->withInput();
        }
        else{

            return redirect('/');

        }   

        // if($validator->fails())
	    // { 
	    // 	return redirect('/')->withErrors($validator)->withInput();

	    // }
	    // else{
		    
	    // }


    }   

}




// $username => 'required|max:100|min:8',
// $email =>'required|unique:users|regex:/^.+@.+$/i',
// $type => 'required|max:10|min:6|not=admin',
// $password =>'required|max:18|min:8'
