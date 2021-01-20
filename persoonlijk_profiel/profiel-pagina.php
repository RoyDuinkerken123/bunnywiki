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
            <form method="POST" action="" class="persoonlijkProfiel bg-dark p-4">
                <h4> Mijn profiel </h4>
                <div class="form-group my-3">
                    <img src="../assets/images/dummy.jpg" width="150" height="150">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row justify-content-end">
                                <div class="persoonlijkeInfo">
                                    <p> Voornaam</p>
                                    <p> Voorvoegsel</p>
                                    <p> Achternaam</p>
                                    <p> E-mailadres</p>
                                    <p> Woonplaats</p>
                                    <p> Geboortedatum</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row justify-content-start">
                                <div class="persoonlijkeInfo">
                                    <p> Mick </p>
                                    <p> van </p>
                                    <p> Stotijn </p>
                                    <p>Mickstotijn@hotmail.com</p>
                                    <p>Hoogeveen</p>
                                    <p>11-03-2001</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group align-items-center justify-content-between">
                    <button class="globalBtn"> Wijzigen</button>
                    <a href="">Account verwijderen?</a>
                    <!--                    WEET U HET ZEKER???-->
                </div>
            </form>
        </div>
    </div>
</div>
<!-- POP UP VOOR WIJZIGEN PROFIEL -->
<div class="container " id="wijzigProfiel">
    <div class="row justify-content-center">
        <div class="col-lg-7 text-white">
            <form method="POST" action="" class="persoonlijkProfiel bg-dark p-4">
                <h4> Mijn profiel wijzigen </h4>
                <div class="form-group my-3">
                    <img src="../assets/images/dummy.jpg" width="150" height="150">
                </div>
                <div class="form-group m-0">
                    <input type="file" class="m-0 p-0">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Voornaam">
                    <input type="text" placeholder="Voorvoegsel">
                </div>
                <div class="form-group"><input type="text" placeholder="Achternaam" name="achternaam"></div>
                <div class="form-group"><input type="text" placeholder="E-mailadres" name="email"></div>
                <div class="form-group"><input type="text" placeholder="Woonplaats" name="woonplaats"></div>
                <div class="form-group"><p style="color: white;font-size: 12px;" class="m-0 p-0">Geboortedatum</p></div>
                <div class="form-group p-0 m-0"><input type="date" name="geboortedatum"></div>
                <div class="form-group"><input type="password" placeholder="Wachtwoord" name="wachtwoord"></div>
                <div class="form-group"><input type="password" placeholder="Bevestig wachtwoord"
                                               name="bevestig wachtwoord"></div>
                <div class="form-group align-items-center justify-content-between">
                    <button class="globalBtn"> Opslaan</button>
                    <a href="">Account verwijderen?</a>
                    <!--                    WEET U HET ZEKER???-->
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
