<?php
session_start();
include "../Database/DB_connect.php";
include "../functions.php";
include "../header/header.php";
?>

<div id="hero" class="container-fluid">
    <div class="row align-items-center justify-content-center h-100 flex-column">
        <h2>
            <?php if(isset($_SESSION['voornaam'])) {
                echo "Hey " . $_SESSION['voornaam'] . "!";
            } ?>
            Welkom op Bunnywiki!</h2>
        <h2> De unieke veilingwebsite voor konijnenproducten! </h2>
    </div>
</div>

<!-- Product categorieen -->
<div class="container sectie">
    <h4 class="title"> Product categorieën </h4>
    <div class="row">
        <div class="col-lg-4">
            <div class="categoryBlocks my-2" id="categoryImage1">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="title text-center"> Categorie 1</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="categoryBlocks my-2" id="categoryImage2">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="title text-center"> Categorie 2</div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="categoryBlocks my-2" id="categoryImage3">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="title text-center"> Categorie 3</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--    Voorgestelde producten -->
<div class="container sectie">
    <div class="title mt-5"> Voorgestelde producten</div>
    <div class="slider">
        <div class="row justify-content-between">
            <div class="col-md-3 recommendedProduct">
                <div class="recommendedProductFoto">
                    <img src="../assets/images/dummy.jpg" height="250" width="100%">
                </div>
                <div class="recommendedProductName"> Konijnen voer</div>
                <div class="recommendedProductTimeLeft">Beschikbare tijd: 04:35:17</div>
            </div>

            <div class="col-md-3 recommendedProduct">
                <div class="recommendedProductFoto">
                    <img src="../assets/images/dummy.jpg" height="250" width="100%">
                </div>
                <div class="recommendedProductName"> Konijnen voer</div>
                <div class="recommendedProductTimeLeft">Beschikbare tijd: 04:35:23</div>
            </div>
            <div class="col-md-3 recommendedProduct">
                <div class="recommendedProductFoto">
                    <img src="../assets/images/dummy.jpg" height="250" width="100%">
                </div>
                <div class="recommendedProductName"> Konijnen voer</div>
                <div class="recommendedProductTimeLeft">Beschikbare tijd: 17:35:22</div>
            </div>
            <div class="col-md-3 recommendedProduct">
                <div class="recommendedProductFoto">
                    <img src="../assets/images/dummy.jpg" height="250" width="100%">
                </div>
                <div class="recommendedProductName"> Konijnen voer</div>
                <div class="recommendedProductTimeLeft">Beschikbare tijd: 17:35:22</div>
            </div>
        </div>
    </div>
</div>

<!--    Recent toegevoegde producten-->
<div class="container sectie">
    <div class="title mt-5">Recente toegevoegde producten</div>
    <div class="slider">
        <div class="row justify-content-between">
            <div class="col-md-3 recommendedProduct">
                <div class="recommendedProductFoto">
                    <img src="../assets/images/dummy.jpg" height="250" width="100%">
                </div>
                <div class="recommendedProductName"> Konijnen voer</div>
                <div class="recommendedProductTimeLeft">Beschikbare tijd: 04:35:17</div>
            </div>

            <div class="col-md-3 recommendedProduct">
                <div class="recommendedProductFoto">
                    <img src="../assets/images/dummy.jpg" height="250" width="100%">
                </div>
                <div class="recommendedProductName"> Konijnen voer</div>
                <div class="recommendedProductTimeLeft">Beschikbare tijd: 04:35:17</div>
            </div>

            <div class="col-md-3 recommendedProduct">
                <div class="recommendedProductFoto">
                    <img src="../assets/images/dummy.jpg" height="250" width="100%">
                </div>
                <div class="recommendedProductName"> Konijnen voer</div>
                <div class="recommendedProductTimeLeft">Beschikbare tijd: 04:35:17</div>
            </div>

            <div class="col-md-3 recommendedProduct">
                <div class="recommendedProductFoto">
                    <img src="../assets/images/dummy.jpg" height="250" width="100%">
                </div>
                <div class="recommendedProductName"> Konijnen voer</div>
                <div class="recommendedProductTimeLeft">Beschikbare tijd: 04:35:17</div>
            </div>
        </div>
    </div>
</div>

<?php include "../footer/footer.php"; ?>

