<?php

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
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