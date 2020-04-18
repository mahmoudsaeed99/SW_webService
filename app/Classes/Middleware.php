<?php

namespace App\Classes;

use App\Classes\Authentication;

use App\Classes\Authorization;

class Middleware implements Authentication{
    private $List = array("normal","ownershop");

    public function getAllRegister($type){
        if(in_array($type,$this->List)){
            return '/error';
        }

        $access = new Authorization();
        return  $access->getAllRegister($type)."<br>";

    }

}

?>