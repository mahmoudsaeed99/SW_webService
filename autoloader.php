<?php
  
    function myAutoLoader($classname){
        $path="classes/";
        $ext=".php";
        $fullpath=$path.$classname.$ext;
        include_once $fullpath;
    }
    spl_autoload_register('myAutoLoader');