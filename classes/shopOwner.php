
<?php

// include 'autoloader.php';

class ShopOwner extends User{
    
    public function __construct($firstname , $lastname , $pass , $email){
        
        // parent::__construct($name , $pass , $email);
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

}


?>