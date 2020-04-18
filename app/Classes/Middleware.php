<?php

namespace App\Classes;

use App\Classes\authentication;

use App\Classes\authorization;

class Middleware implements authentication{
    private $List = array("normal","ownershop");

    public function is_admin($function,$type){
        if(in_array($type,$this->List)){
            return '/error';
        }

        $access = new authorization();
        return  $access->is_admin($function,$type)."<br>";

    }

}

?>