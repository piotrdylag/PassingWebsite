<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="icon" href="metroexodusicon.png">
    <meta charset="UTF-8">
    <title>Zaloguj się</title>
    <link href='https://fonts.googleapis.com/css?family=Rubik Mono One' rel='stylesheet'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: forestgreen;
            background-size: contain;
    }
        #naglowek {
            text-align: center;
            font-weight: bold;
            font-size: 40px;
            font-family: "Rubik Mono One";
            color: azure;

        }
        #loginform{
            background-color: darkgreen;
            width: 400px;
            height: 300px;
            position: center;
            text-align: center;
            bottom: 50px;
        }

    </style>
</head>
<body>
<h1 id="naglowek">ZALOGUJ SIĘ!"</h1>
<div class="container-fluid" id="loginform">
    <input type="text" name="login" placeholder="Nazwa użytkownika"><br><br>
    <input type="text" name="passwd" placeholder="Hasło"><br>
    <input type="submit" name="log in" value="Log in">
    <button type="button" class="btnback" onclick="location.href = 'main.htmlbuddy'">Powrót</button>

</div>
</body>
</html>
<?php


?>
