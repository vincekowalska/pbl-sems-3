<?php

    $db_connection = pg_connect("host=localhost dbname=test_apps user=apps_user password=a");
    
    class RegisterUser{
        private $name;
        private $email;
        private $password;
        
        
        public function register($name, $email, $password){
            global $db_connection;
            // if (empty($nama) || empty($email) || empty($password)) {
            //     return "Please fill all form";
            // }

            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
            
            $query = "INSERT INTO user_datas(name,email,password) VALUES ('$name', '$email', '$password')";
            $post_db = pg_query( $db_connection, $query);
        }
    }
?>