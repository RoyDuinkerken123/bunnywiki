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
                    <?php
                    if (isset($_SESSION['ingelogd'])) {
                        if ($_SESSION['ingelogd'] !== 1) { ?>
                            <a href="../login_registratie/login_registratie-pagina.php" id="loginBtn"
                               class="globalBtn border border-primary">
                                Inloggen
                            </a>
                        <?php } else if ($_SESSION['ingelogd'] === 1) { ?>
                            <a href="../login_registratie/uitloggen.php" id="loginBtn"
                               class="globalBtn border border-primary">
                                Uitloggen
                            </a>
                        <?php }} else {
                        ?>
                        <a href="../login_registratie/login_registratie-pagina.php" id="loginBtn"
                           class="globalBtn border border-primary">
                            Inloggen
                        </a>
                        <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
