<?php
session_start();
include "../header/header.php";
?>

<div class="container p-0">
    <div class="row justify-content-center">
        <div class="col-lg-7 text-white">
            <form method="POST" action="" class="persoonlijkProfiel bg-dark p-4">
                <h4 class="pb-2"> Contact </h4>
                <div class="form-group"><input type="text" placeholder="Voornaam"></div>
                <div class="form-group"><input type="text" placeholder="Achternaam"></div>
                <div class="form-group"><input type="text" placeholder="E-mailadres"></div>
                <div class="form-group"><textarea class="form-control p-1" id="exampleFormControlTextarea1" rows="3" placeholder="Uw bericht..."></textarea></div>
                <div class="form-group align-items-center justify-content-between">
                    <button class="globalBtn"> Versturen </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "../footer/footer.php" ?>
