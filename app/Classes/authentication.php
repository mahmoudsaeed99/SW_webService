<?php

   namespace App\Classes;    
    
   interface Authentication{
        public function is_admin($function,$type);
    }
   

?>