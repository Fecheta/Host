<?php

    $url = parse_url(getenv("mysql://b2d8f581f3e0f5:f8a7a47e@us-cdbr-east-03.cleardb.com/heroku_08132accc9fc692?reconnect=true"));
    $server = "us-cdbr-east-03.cleardb.com";
    $username = "b2d8f581f3e0f5";
    $password = "f8a7a47e";
    $db = "DBdemo";
    $conn = new mysqli($server, $username, $password, $db);

    if($conn->connect_error){
        die("Conectare esuata..." . $conn->connect_error);
    }

    function getDetinut($idDetinut){
        $sql = "SELECT id_detinut, nume, prenume FROM detinuti WHERE id = " . $idDetinut;
        $result = $conn->query($sql);
        return $result;
    }
?>