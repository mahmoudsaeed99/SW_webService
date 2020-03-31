<?php

    class User{
        public $id;
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
    class Registration{

        public $user;
        public $userModel;

        public function __construct($user){
            $this->user = new User();
            $this->userModel = new UserModel();
            $this->user = $user;
        }

        public function makeRegister(){
            
                $userModel->insert($this->user);
            
        }   



    }
    class LogIn {

        public $user;
        public $userModel;

        public function __construct($user)
        {
            $this->userModel = new UserModel();
            $this->user = $user;  
        }


        public function makeLogin(){

                if(isset($this->user->email) && isset($this->user->pass)){
                    $userModel->selectBy($this->user->email , $this->user->pass);

                } 
                else if(isset($this->user->username) && isset($this->user->pass)){
                    $userModel->selectBy($this->user->username , $this->user->pass);

                }


        }



    }






?>