<?php

namespace App\Classes;

use App\Classes\Proxy;

use App\Classes\mmmm;

class Mahmoud implements Proxy{
    private $List = array("facebook","twitter");

    public function serverSite($url){
        if(in_array($url,$this->List)){
            return "this site is blocked <br>";
        }
        $mm = new mmmm();
        return  $mm->serverSite($url)."<br>";

    }

}

?>