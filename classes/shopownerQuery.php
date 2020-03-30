<?php

    class ShopQuery implements doQuery{
        
        public function selectAll($conn){
            $query = "SELECT `firstname`, `id`, `lastname`, `email`, `password` FROM `shopowner` WHERE 1";
            $result = mysqli_query($conn, $query);
            return $result;
        }
    }

?>