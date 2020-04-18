<?php

namespace App\Classes;

use App\Http\Controllers\RegisterController;

use App\Classes\Authentication;

class Authorization implements Authentication{

    public function getAllRegister($type){

        $register = new RegisterController();
        return $register->getRegisters();    
    }
}

?>