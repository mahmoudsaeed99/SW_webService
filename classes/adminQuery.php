<?php

    class AdminQuery implements doQuery{
        
        public function selectAll($conn){
            $query = "SELECT `firstname`, `id`, `lastname`, `email`, `password` FROM `admins` WHERE 1";
            $result = mysqli_query($conn, $query);
            return $result;    
        }
        public function insert($conn , User $user){
            $query = "INSERT INTO `admins`(`firstname`, `lastname`, `email`, `password`) 
            VALUES ('$user->firstname','$user->lastname','$user->email','$user->pass')";
            $result = mysqli_query($conn, $query);
            return $result; 
        }
    }

?>