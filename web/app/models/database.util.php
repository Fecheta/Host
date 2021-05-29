<?php

    class Database{
        private $hostname = "us-cdbr-east-03.cleardb.com";
        private $username = "b2d8f581f3e0f5";
        private $password = "f8a7a47e";
        private $dbname = "heroku_08132accc9fc692";

        private $conn;

        public function __construct(){
            $this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);

            if(!$this->conn){
                echo "Nu ma pot conecta la baza de date... " . mysqli_error();
            }
        }

        public function testSelect(){
            $sql = "SELECT * FROM detinuti";
            $result = mysqli_query($this->conn, $sql);
    
            return $result;
        }

        public function testFindById($id){
            $sql = "SELECT * FROM detinuti WHERE id_detinut = " . $id;
            $result = mysqli_query($this->conn, $sql);

            return $result;
        }

    }

?>