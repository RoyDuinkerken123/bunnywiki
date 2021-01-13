<?php
    include 'DB_connect.php';
?>

<!--Social media koppelingen?-->
<!--Bunnystuff.nl-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="stylesheet" href="../assets/css/profiel.css">
    <link rel="stylesheet" href="../assets/css/wachtwoord-vergeten.css">
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/overzichten/biedingen.css">
    <link rel="stylesheet" href="../assets/css/overzichten/gebruikers.css">
    <link rel="stylesheet" href="../assets/css/overzichten/producten.css">
    <link rel="stylesheet" href="../assets/css/login_registratie.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Bunnywiki</title>
</head>
<body>
<div class="container-fluid p-0 header">
    <div class="container bg-dark">
        <div class="row justify-content-lg-between justify-content-center">
            <div class="col-lg-3 p-0">
                <div class="row justify-content-lg-start justify-content-center">
                    <div class="logoHolder">
                        <img src="../assets/images/dummy.jpg" class="logo">
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="row align-items-center h-100 justify-content-center">
                    <input type="text" id="searchBar" placeholder="Zoek product">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="row align-items-center h-100 justify-content-lg-start justify-content-end">
                    <a href="../login/login-pagina.html" id="loginBtn" class="globalBtn border border-primary">
                        Inloggen
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container p-0">
    <div class="row justify-content-center">
        <div class="col-lg-7 text-white">
            <form method="POST" action="verwerk.php" class="persoonlijkProfiel bg-dark p-4" enctype="multipart/form-data">  
                <h4 class="pb-2"> Product toevoegen </h4>
                <label>Product naam:</label>
                <div class="form-group mt-0"><input type="text" id="product_naam" name="product_naam"></div>
                <label>Product omschrijving:</label>
                <div class="form-group mt-0"><textarea class="form-control p-1" id="product_omschrijving" name="product_omschrijving" rows="3" ></textarea></div>
                <label>Minimum bod:</label>
                <div class="form-group mt-0"><input type="number" width="100%" id="product_minimumbod" name="product_minimumbod"></div>
                <label>Kies een foto:</label>
                <div class="form-group mt-0"><input type="file" name="file" id="file"></div>
                <div class="ml-0 form-group align-items-center justify-content-between">
                    <input type="submit" class="globalBtn" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid footer py-5 px-0">
    <div class="container">
        <div class="row align-items-center h-100 justify-content-between">
            <div class="col-lg-3 p-lg-0">
                <div class="row align-items-center h-100">
                    <div class="logoHolder" class="p-3 p-lg-0">
                        <img src="../assets/images/dummy.jpg" class="logo">
                    </div>
                </div>
            </div>
            <div class="contactBlockHolder col-lg-5 p-lg-0">
                <div class="title">Contact</div>
                <div class="contactBlock col-12">
                    <div class="form-group">
                        <p> Tel: </p>
                        <a href="#">06-12345678 </a>
                    </div>
                    <div class="form-group">
                        <p> Email: </p>
                        <a href="#">verzinnaam@hotmail.com </a>
                    </div>
                    <div class="form-group">
                        <p> Adres: </p>
                        <p> Verzinstraat 39 </p>
                    </div>
                </div>
            </div>
            <div class="textHolder col-lg-3">
                <a href="../login/login-pagina.html"> Inloggen </a>
                <a href="../login/login-pagina.html"> Gratis registreren </a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>
</html>
