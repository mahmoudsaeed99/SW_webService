<?php

namespace App\Classes;


use App\Classes\Proxy;

class AccessAdmin implements Proxy{

    public function blockSite($type){
        if($type == "admin"){
            return true;
        }
        return false;
    }
}

?>