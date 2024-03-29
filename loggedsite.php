<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="icon" href="image/metroexodusicon.png">
    <link rel="script" href="login.php">
    <link rel="script" href="register.php">
    <link rel="stylesheet" href="css/style.css">
    <link rel="script" href="js/">
    <meta charset="UTF-8">
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
<p class ="zalog">Zalogowany jako <?php session_start(); $username = $_SESSION['login']; echo $username;?></p>
<button type="button" class="btnlogout" onclick="location.href = 'main.html'"> Logout </button>
<div class="container-fluid">
    <h1 id="naglowek">O "Metro"</h1>
</div>
<div class="menu">
    <nav class="desk">
        <ul>
            <li class="menu"> <a href="loggedsite.php"> GŁÓWNA</a></li>
            |
            <li class="menu"> <a href="ouniwersumzalog.php"> O UNIWERSUM </a></li>
            |
            <li class="menu"><a href="#">KSIĄŻKI </a></li>
            |
            <li class="menu"><a href="#">GRY</a></li>
            |
        </ul>
    </nav>
    <nav class="mob">
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
</div>
<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
            <img class="d-block w-100" src="image/metroex.jpeg"
                 alt="First slide">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="image/metrolastlight.jpg"
                 alt="Second slide">
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="image/metro_2033_redux.jpg"
                 alt="Third slide">
        </div>
        <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<p class="text-light">Inspirowana cyklem postapokaliptycznych powieści Dmitrija Głuchowskiego
    seria pierwszoosobowych strzelanek (FPS). Marka wykreowana została przez ukraińskie studio 4A Games,
    a obecnie prawa do niej znajdują się w posiadaniu firmy Deep Silver.
    <br><i> Źródło: https://www.gry-online.pl/</i></p>

</div>
<div class="row bag-info">
    <!--class="img-fluid" responsywne obrazki!-->
    <div class = "col col-3 com-sm-12 col-md-6 col-lg-3">
        <img class="img-fluid rounded-circle" src="image/metroex.jpeg" alt=""><br> Metro Exodus (2019)
    </div>
    <div class = "col col-3 col-md-6 col-lg-3">
        <img class="img-fluid rounded-circle" src="image/metrolastlight.jpg" alt=""><br>Metro Last Light Reduxe (2014)
    </div>
    <div class = "col col-3 col-md-6 col-lg-3">
        <img class="img-fluid rounded-circle" src="image/metro_2033_redux.jpg" alt=""><br>Metro 2033 Reduxe (2014)
    </div>
    <div class = "col col-3 col-md-6 col-lg-3">
        <img class="img-fluid rounded-circle" src="image/cropped-616-357-943955.jpg" alt=""><br>Metro Exodus (2019)
    </div>
</div>
<br>
<div class="cards">
    <div class="card" style="width:350px; height:550px">
        <div class="card-img-top"> <img class="img-fluid" src="image/ArtyomMetroExodus.jpg"></div>
        <div class="card-body">
            <h4 class="card-title">Artyom Alekseyevich Chyornyj</h4>
            <p class="card-text">Główny bohater powieści "Metro 2033" oraz
                gier ukraińsko - rosyjskich
                Metro 2033,Metro: Last Light oraz w Metro Exodus.</p><br>
            <a href="https://metro.fandom.com/pl/wiki/Artem" class="btn btn-primary">Więcej>></a>
        </div>
    </div>
    <div class="card" style="width:350px; height:550px">
        <div class="card-img-top"> <img class="img-fluid" src="image/mlynarz.jpg"></div>
        <div class="card-body">
            <h1 class="card-title">Sviatoslav Konstantinovich Mel'nikov</h1>
            <p class="card-text"> Były żołnierz Rosji i lider stalkerów z Zakonu Sparty.
                Poważny i zdecydowany. Przebywa w Polis, a po odkryciu Metro-2 - w D6.
                Ma córkę w wieku Artema - Annę.</p><br>
            <a href="https://metro.fandom.com/pl/wiki/M%C5%82ynarz" class="btn btn-primary">Więcej>></a>
        </div>
    </div>
    <div class="card" style="width:350px; height:550px">
        <div class="card-img-top"> <img class="img-fluid" src="image/annametroexodus.jpg"></div>
        <div class="card-body">
            <h1 class="card-title">Anna Sviatoslavovna Mel'nikova</h1>
            <p class="card-text"> Córka Młynarza, dowódcy Zakonu Sparty.
                Jest także żoną głównego bohatera Artyoma</p><br>
            <a href="https://metrovideogame.fandom.com/wiki/Anna_(Character)" class="btn btn-primary">Więcej>></a>
        </div>
    </div>

</div>
<div class="footer">Copyright by Piotr Dyląg 2019 UP Kraków</div>
</body>
</html>