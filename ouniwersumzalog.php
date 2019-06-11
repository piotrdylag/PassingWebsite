<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="icon" href="image/metroexodusicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="script" href="js/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uniwersum Metro</title>
    <link href='https://fonts.googleapis.com/css?family=Rubik Mono One' rel='stylesheet'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<font style="color: #f0f8ff">Zalogowany jako: <?php session_start(); $username = $_SESSION['login']; echo $username;?></font>
<body>
<button type="button" class="btnlogin" onclick="location.href = 'login.php'"> Login</button>
<div class="container-fluid">
    <h1 id="naglowek">O UNIWERSUM METRO</h1>
</div>
<div class="menu">
    <nav class="desk">
        <ul>
            <li class="menu"><a href="loggedsite.php"> GŁÓWNA</a></li>
            |
            <li class="menu"><a href="ouniwersumzalog.php"> O UNIWERSUM </a></li>
            |
            <li class="menu"><a href="#">KSIĄŻKI </a></li>
            |
            <li class="menu"><a href="#">GRY</a></li>
            |
        </ul>
    </nav>
    <nav class="mob">
        <ul>
            <li class="menu"><a href="#"> GŁÓWNA</a></li>
            |
            <li class="menu"><a href="#"> O UNIWERSUM </a></li>
            |
            <li class="menu"><a href="#">KSIĄŻKI </a></li>
            |
            <li class="menu"><a href="#">GRY</a></li>
        </ul>
    </nav>
</div>
<p class="ouniwersum" STYLE="color: aliceblue ;">Uniwersum Metro 2033 (ros. Вселенная Метро 2033) –
    międzynarodowy projekt literacki zapoczątkowany przez rosyjskiego pisarza Dmitrija Głuchowskiego
    w 2009 roku z rosyjskim wydawnictwem AST. W Polsce projektem zajmuje się wydawnictwo Insignis Media.
    Książki serii opisują przygody ludzi na każdym zakątku postapokaliptycznej Ziemi, po wojnie nuklearnej.
    Największa część historii dzieje się w metrach, gdzie schronili się uciekinierzy podczas III wojny światowej.
    Po 20 latach nadal pozostają w ukryciu, bez możliwości powrotu na powierzchnię, z powodu panującego tam promieniowania
    radioaktywnego i aktywności agresywnych mutantów. Uniwersum składa się z kilkudziesięciu powieści wydanych w Rosji, i mniejszej
    ilości w innych krajach. W Polsce dodatkowo wydano cztery zbiory opowiadań napisane przez polskich fanów</p>
<div class="footer">Copyright by Piotr Dyląg 2019 UP Kraków</div>
</body>
</html>
<?php
