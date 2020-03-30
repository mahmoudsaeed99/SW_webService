
<?php

// include 'autoloader.php';
 //include '../register/register.php';
    
 class Admin extends User {

    public function __construct($firstname , $lastname , $pass , $email){
        
        // parent::__construct($name , $pass , $email);
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->pass = $pass;
        $this->email = $email;
    }
    

 }

?>