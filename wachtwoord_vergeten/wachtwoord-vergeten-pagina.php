<?php
session_start();
include "../header/header.php";
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6  text-white">
            <form action="" method="POST" name="wachtwoordVergetenForm" id="wachtwoordVergetenForm" class="bg-dark p-4">
                <div class="title">Wachtwoord vergeten?</div>
                <p> Als u uw wachtwoord vergeten hebt, kunt u deze hier resetten </p>
                <div class="form-group">
                    <input type="email" name="e-mail" placeholder="Vul hier uw e-mailadres in">
                </div>
                <div class="form-group">
                    <button name="loginBtn" class="globalBtn my-4"> Verstuur e-mail</button>
                </div>
                <a href="../home/index.php">Terug naar de homepagina</a>
            </form>
        </div>
    </div>
</div>
<?php include "../footer/footer.php"; ?>
