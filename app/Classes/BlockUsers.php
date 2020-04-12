<?php

namespace App\Classes;

use App\Classes\Proxy;

use App\Classes\AccessAdmin;

class BlockUsers implements Proxy{
    private $List = array("normal","shopowner");

    public function blockSite($type){
        if(in_array($type,$this->List)){
            return false;
        }
        $mm = new AccessAdmin();
        return  $mm->blockSite($type)."<br>";

    }

}

?>