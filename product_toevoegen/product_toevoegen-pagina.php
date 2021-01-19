<?php
session_start();
include 'DB_connect.php';
include "../header/header.php";
?>
<div class="container p-0">
    <div class="row justify-content-center">
        <div class="col-lg-7 text-white">
            <form method="POST" action="verwerk.php" class="persoonlijkProfiel bg-dark p-4"
                  enctype="multipart/form-data">
                <h4 class="pb-2"> Product toevoegen </h4>
                <label>Product naam:</label>
                <div class="form-group mt-0"><input type="text" id="product_naam" name="product_naam"></div>
                <label>Product omschrijving:</label>
                <div class="form-group mt-0"><textarea class="form-control p-1" id="product_omschrijving"
                                                       name="product_omschrijving" rows="3"></textarea></div>
                <label>Minimum bod:</label>
                <div class="form-group mt-0"><input type="number" width="100%" id="product_minimumbod"
                                                    name="product_minimumbod"></div>
                <label>Kies een foto:</label>
                <div class="form-group mt-0"><input type="file" name="file" id="file"></div>
                <div class="ml-0 form-group align-items-center justify-content-between">
                    <input type="submit" class="globalBtn" name="submit" value="Toevoegen">
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "../footer/footer.php" ?>
