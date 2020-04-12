<?php

namespace App\Classes;


use App\Classes\Proxy;

class mmmm implements Proxy{

    public function serverSite($url){
        return  "http://".$url.".com";
    }
}

?>