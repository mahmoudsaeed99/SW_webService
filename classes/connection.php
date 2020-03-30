<?php

    class DB{
        private $local  = "localhost" ;
        private $pass = "";
        private $database = "SW";
        private $username = "root";
        private $conn = null;

        public function __construct()
        {
            $this->conn = new mysqli($this->local,$this->username,$this->pass,$this->database);

        }
        public function getConnect(){
            return $this->conn;
        }
        public function closeConnect()
        {
            if($this->conn!=null){
                mysqli_close($this->conn);
                // echo "closed successfully";
            }
        }

    }

    // $db = new DB();
    // $conn = $db->getConnect();
    // if($conn->connect_error){
    //     die($conn->connect_error);
    // }
    // else{
        
    //     $db->closeConnect();
    // }


?>