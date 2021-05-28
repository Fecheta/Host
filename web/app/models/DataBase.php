<?php

    $servername = "us-cdbr-east-03.cleardb.com";
    $username = "b2d8f581f3e0f5";
    $password = "f8a7a47e";
    $dbname = "demoBD";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("Conectare esuata..." . $conn->connect_error);
    }

    function getDetinut($idDetinut){
        $sql = "SELECT id_detinut, nume, prenume FROM detinuti WHERE id = " . $idDetinut;
        $result = $conn->query($sql);
        return $result;
    }
?>