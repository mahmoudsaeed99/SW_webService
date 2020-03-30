<?php

    class NormalQuery implements doQuery{
        
        public function selectAll($conn){
            $query = "SELECT `firstname`, `id`, `lastname`, `email`, `password` FROM `normaluser` WHERE 1";
            $result = mysqli_query($conn, $query);
            return $result;
        }
    }

?>