<?php

namespace App\Classes;

use App\Http\Controllers\RegisterController;

use App\Classes\authentication;

class authorization implements authentication{

    public function is_admin($function,$type){
        if($function=="getRegisters"){
            $register = new RegisterController();
            return $register->getRegisters();    
        }
    }
}

?>