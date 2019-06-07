<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="icon" href="image/metroexodusicon.png">
    <link rel="stylesheet" href="css/loginstyle.css">
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
<h1 id="naglowek">ZALOGUJ SIĘ!"</h1>
<div class="container-fluid" id="loginform">
    <form action="login.php?attempt" method="post" id="logging">
    <input type="text" name="login" placeholder="Nazwa użytkownika"><br><br>
    <input type="password" name="passwd" placeholder="Hasło"><br>
    <input type="submit" name="log in" value="Log in">
    <button type="button" class="btnback" onclick="location.href = 'main.html'">Powrót</button>
    </form>
</div>
</body>
<?php
if(isset($_REQUEST['attempt'])){
    $conn = mysqli_connect('localhost', 'dylpio', 'myazWtUPsql', 'dylpio' );
    if (!$conn) {
        die("Connection failed: " . mysqli_error($conn));
    }
    $username = $_POST['login'];
    $passwd = $_POST['passwd'];

    $query = mysqli_query($conn, "
    SELECT login 
    FROM loginsTB
    WHERE login = '$username'
    AND pass = '$passwd'") or die(mysqli_error($conn));

    $total =  mysqli_num_rows($query);
    if($total > 0){
        session_start();
        $_SESSION['login'] = $username;
        $_SESSION['pass'] = $passwd;
        header("location: loggedsite.php");
    }

    mysqli_close($conn);
}


?>
</html>