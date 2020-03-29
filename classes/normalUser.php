
<?php

// include 'autoloader.php';
include 'classes/User.php';


class NormalUser extends User{

    public function __construct($name , $pass , $email){
        
        // parent::__construct($name , $pass , $email);
        $this->name = $name;
        $this->pass = $pass;
        $this->email = $email;
    }
}


?>