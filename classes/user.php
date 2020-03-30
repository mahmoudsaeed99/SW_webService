<?php

    abstract class User{
            
          public $name;
          public $pass;
          public $email;
           
          public function __contruct($name , $pass , $email){
                // $super();
                $this->name = $name;
                $this->pass = $pass;
                $this->email = $email;

          }
          
          
    }




?>

