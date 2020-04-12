<?php

namespace App\Classes;


use App\Classes\Proxy;

class AccessAdmin implements Proxy{

    public function blockSite($type){
        return  true;
    }
}

?>