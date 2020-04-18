<?php

namespace App\Classes;

use App\Classes\Authentication;

use App\Classes\Authorization;

class Middleware implements Authentication{
    private $List = array("normal","ownershop");

    public function is_admin($function,$type){
        if(in_array($type,$this->List)){
            return '/error';
        }

        $access = new Authorization();
        return  $access->is_admin($function,$type)."<br>";

    }

}

?>