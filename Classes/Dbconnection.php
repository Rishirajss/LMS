<?php

    class Dbconnection{

        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "lsmDb";
        private $conn;

       public function __construct(){
            $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);

            if($conn){
                    // echo "Connection Stablish";
            } else {
                echo "Database error";
            }
       }
    }
?>

