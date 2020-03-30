
<?php

// include 'autoloader.php';

class ShopOwner extends User{
    
<<<<<<< HEAD
    public function __construct($firstname , $lastname , $pass , $email){
        
        // parent::__construct($name , $pass , $email);
        $this->firstname = $firstname;
        $this->lastname = $lastname;
=======
    public function __construct($name , $pass , $email){
        
        // parent::__construct($name , $pass , $email);
        $this->name = $name;
>>>>>>> 8e7b9b8ff7837be0c1644bd1300d6b8189517e59
        $this->pass = $pass;
        $this->email = $email;
    }

}


?>