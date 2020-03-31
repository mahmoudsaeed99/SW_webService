<?php

    abstract class User{
        public $username;
        public $email;
        public $pass;
        public $type;

    }

    class UserModel{
        private $conn;
        public $select = "SELECT `username`, `email`, `password`, `user_type`, `id` FROM `users` WHERE 1";
        public $loginSelect = "SELECT `username`, `email`, `password`, `user_type`, `id` FROM `users` WHERE ";
        public $insert = "INSERT INTO `users`(`username`, `email`, `password`, `user_type`) VALUES ";

        public function __construct()
        {
            $this->conn = new mysqli("localhost","root","","SW");

        }
        public function selectAll(){
            $query = $this->select;
            $result = mysqli_query($this->conn, $query);
            return $result;  
        }
        public function selectBy($username , $pass){
            $query = $loginSelect."username = '$username' AND password = '$pass'";
            $result = mysqli_query($this->conn, $query);
            return $result;  
        }
        public function insert(User $user){
            $query = $insert."('$user->username','$user->email','$user->pass','$user->type')";
            $result = mysqli_query($this->conn, $query);
            return $result; 

        }
        public function closeConnect()
        {
            if($this->conn!=null){
                mysqli_close($this->conn);
                // echo "closed successfully";
            }
        }
    }
    class Registration extends User{
        
        public $usermodel = new UserModel();
        
        public function __construct($username , $email , $pass  , $type){
            $this->username = $username;
            $this->email = $email;
            $this->pass = $pass;
            $this->type = $type;
        }




    }
    class LogIn extends User{
        
        public function __construct($username , $email , $pass  , $type){
            $this->username = $username;
            $this->email = $email;
            $this->pass = $pass;
            $this->type = $type;
        }

    }






?>