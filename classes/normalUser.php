
<?php

// include 'autoloader.php';
include 'classes/User.php';


class NormalUser extends User{

    public function __construct($firstname , $lastname , $pass , $email){
        
        // parent::__construct($name , $pass , $email);
        $this->firstname = $firstname;
        $this->lastname = $lastname;
}
}


?>