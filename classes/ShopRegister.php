<?php

include 'autoloader.php';

    class ShopRegister extends Register{

        public function registration(User $user){
            echo "shop <br>";
        }

    }



?>