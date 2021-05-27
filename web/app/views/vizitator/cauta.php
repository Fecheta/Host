<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeMo</title>
    <link rel="icon" href="/public/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/css/vizitator/cauta.css">
    <link rel="stylesheet" href="/public/css/vizitator/index.css">
    <script type="text/javascript" src="/public/javaScript/topnav.js"></script>
</head>
<body>
  
<div class="fullTopnav">
        <div id="myTopnav" class="topnav">
            <a id="home" href="/vizitator/index">Home</a>
            <a id="istoric" href="/vizitator/istoric">Istoric vizite</a>
            <a id="add" href="/vizitator/viziteaza">Adauga vizita</a>
            <a id="verifica" href="/vizitator/cauta" class="activate">Cauta Detinut</a>
            <a id="about" href="/raport/index">Despre</a>
            <div id="userManagePhone" class="extraResponsive">
                <a id="logoutP" href="../../StartPage/html/p1.html">Schimba cont</a>
                <a id="modifyP" href="#change_account_data">Modifica cont</a>
                <a id="removeP" href="#del_account">Sterge Cont</a>
            </div>
        </div>
        <div class="account">
            <a href="javascript:void(0);" class="icon" onclick="Func()">
                <i class="fa fa-bars"></i>
            </a>
            <a id="user" href="#account" class="logged" onclick="AccShow(this.id)">Nume User</a>
            <div id="userManage" class="extra">
                <a id="logout" href="../../StartPage/html/LoginPage.html">Schimba cont</a>
                <a id="modify" href="#change_account_data">Modifica cont</a>
                <a id="remove" href="index/del_account">Sterge Cont</a>
            </div>
        </div>
    </div>


</body>

<form action="/vizitator/profil">
    <div class="search">
        <label for="fname" class="titlu">CAUTA PE CINEVA</label>
        <div class="line">
            <label for="fname">Numele</label>
            <input id="fname" type="text" placeholder="Numele de familie" required>
        </div>
        <div class="line">
            <label for="lname">Prenumele</label>
            <input id="lname" type="text" placeholder="Prenumele" required>
        </div>
        <div class="line">
            <label for="cnp">CNP</label>
            <input id="cnp" type="text" placeholder="Cod numeric personal" required>
        </div>
        <div class="line">
            <label for="codDetinut">Cod Unic Detinut</label>
            <input id="codDetinut" type="text" placeholder="Cod Detinut" required>
        </div>

        <button class="btn"> Cauta! </button>
    </div>
</form>
<h3>Apasă pe caută! pentru a ajunge la o pagină cu un model de rezultat</h3>

</html>