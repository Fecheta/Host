<?php

$cleardb_url = parse_url(getenv("mysql://b2d8f581f3e0f5:f8a7a47e@us-cdbr-east-03.cleardb.com/heroku_08132accc9fc692?reconnect=true"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);

$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

    if(!$conn){
        die("Conectare esuata...");
    }

    function getDetinut($idDetinut){
        $sql = "SELECT id_detinut, nume, prenume FROM detinuti WHERE id = " . $idDetinut;
        $result = mysql_query($sql);
        return $result;
    }
?>