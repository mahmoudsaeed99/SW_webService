
<?php

// include 'autoloader.php';

class ShopOwner extends User{
    
    public function __construct($name , $pass , $email){
        
        // parent::__construct($name , $pass , $email);
        $this->name = $name;
        $this->pass = $pass;
        $this->email = $email;
    }

}


?>