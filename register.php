<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="icon" href="image/metroexodusicon.png">
    <link rel="stylesheet" href="css/registerstyle.css">
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
</head>
<body>
<h1 id="naglowek">ZAREJESTRUJ SIĘ!"</h1>
<div class="container-fluid" id="registerform">
    <form action="register.php?attempt" method="post" id="registering">
        <input type="text" name="login" placeholder="Nazwa użytkownika"><br><br>
        <input type="password" name="passwd" placeholder="Hasło"><br><br>
        <input type="email" name="email" placeholder="E-mail"><br><br>
        <input type="submit" name="log in" value="Gotowe">
        <button type="button" class="btnback" onclick="location.href = 'main.html'">Powrót</button>
    </form>
</div>

</body>
</html>
