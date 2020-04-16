<?php

namespace App\Classes;

use App\Classes\Proxy;

use App\Classes\AccessAdmin;

class BlockUsers implements Proxy{
    private $List = array("normal","ownershop");

    public function blockSite($type){
        if(in_array($type,$this->List)){
            return false;
        }
        $access = new AccessAdmin();
        return  $access->blockSite($type)."<br>";

    }

}

?>