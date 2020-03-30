<?php

// include 'autoloader.php';

    class NormalRegister extends Register{

        public function registration(User $user){
            echo "normal <br>";
            echo $user->name."<br>";
        }

    }



?>