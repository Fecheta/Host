<?php

    class Database{
        private $hostname = "us-cdbr-east-03.cleardb.com";
        private $username = "b2d8f581f3e0f5";
        private $password = "f8a7a47e";
        private $dbname = "heroku_08132accc9fc692";

        private $conn;

        public function __construct(){
            $this->conn = mysqli_connect($hostname, $username, $password, $dbname);

            if(!$this->conn){
                echo "Nu ma pot conecta la baza de date... " . mysqli_error();
            }
        }

        public function testSelect(){
            $sql = "SELECT * FROM detinuti";
            $result = mysqli_query($this->conn, $sql);
    
            $row = mysqli_fetch_assoc($result);
            return $row;
        }

    }

?>