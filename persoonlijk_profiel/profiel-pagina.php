<?php
session_start();
include "../header/header.php";
?>

<div class="container p-0">
    <div class="row justify-content-center">
        <div class="col-lg-7 text-white">
            <form method="POST" action="" class="persoonlijkProfiel bg-dark p-4">
                <h4> Mijn profiel </h4>
                <div class="form-group my-3">
                    <img src="../assets/images/dummy.jpg" width="150" height="150">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row justify-content-end">
                                <div class="persoonlijkeInfo">
                                    <p> Voornaam</p>
                                    <p> Achternaam</p>
                                    <p> E-mailadres</p>
                                    <p> Woonplaats</p>
                                    <p> Telefoonnummer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row justify-content-start">
                                <div class="persoonlijkeInfo">
                                    <p> <?php if(isset($_SESSION['voornaam'])) {
                                        echo $_SESSION['voornaam']; } else { echo " - "; }?> </p>
                                    <p> <?php if(isset($_SESSION['achternaam'])) {
                                            echo $_SESSION['achternaam']; } else { echo " - "; } ?> </p>
                                    <p> <?php if(isset($_SESSION['email'])) {
                                            echo $_SESSION['email']; } else { echo " - "; } ?> </p>
                                    <p> <?php if(isset($_SESSION['woonplaats'])) {
                                            echo $_SESSION['woonplaats']; }  else { echo " - "; }?> </p>
                                    <p> <?php if(isset($_SESSION['geboortedatum'])) {
                                            echo $_SESSION['geboortedatum']; } else { echo " - "; } ?> </p>
                                    <p> <?php if(isset($_SESSION['telefoonnummer'])) {
                                            echo $_SESSION['telefoonnummer']; } else { echo " - "; } ?> </p>
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
<?php include "../footer/footer.php"; ?>
