<?php
session_start();
include "../Database/DB_connect.php";
include "../header/header.php";
?>

<div class="container my-5">
    <div class="row">
        <div class="opacity-col-img col-lg-3 col-md-6 col-xs-6">
            <div class="row justify-content-lg-center p-3">
                <img class="productIMG img-fluid" src="../assets/images/GroteKonijn.jpg" alt="Product">
            </div>
        </div>
        <div class="opacity-col-img col-lg-5 col-md-6 col-xs-6 my-2">
            <p class="font-weight-bold" style="font-size: 20px;"> Konijnenvoer</p>
            <p class="m-0 p-0">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit
                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="col-lg-4 bg-dark text-white">
            <p class="mt-3 font-weight-bold"> Snel bieden </p>
            <div class="row justify-content-between m-0 p-0 flex-row">
                <button class="globalBtn w-25 bg-success text-white my-1 font-weight-bold"> €125</button>
                <button class="globalBtn w-25 bg-success text-white my-1 font-weight-bold"> €125</button>
                <button class="globalBtn w-25 bg-success text-white my-1 font-weight-bold"> €125</button>
            </div>
            <p class="mt-3 font-weight-bold"> Bied direct </p>
            <div class="row p-3 my-2">
                <input type="text" class="flex-fill font-weight-bold" placeholder="€">
                <button class="globalBtn w-25 ml-3 bg-success text-white font-weight-bold">Bieden</button>
            </div>
            <p class="mt-3 font-weight-bold">Alle biedingen</p>
            <div class="col p-4" style="overflow-y: scroll; overflow-x:hidden; height: 100px;">
                <?php
                //                $sql = "SELECT * FROM biedingen WHERE product_id = 1";
                //                $result = mysqli_query($conn, $sql);
                //                $row = mysqli_fetch_array($result);

                $sql = "SELECT * from biedingen 
                        INNER JOIN gebruikers 
                            ON gebruikers.gebruiker_id = biedingen.gebruiker_id 
                        INNER JOIN producten 
                            ON producten.product_id = biedingen.product_id
                            WHERE producten.product_id = 1";

                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="row justify-content-between border-bottom">
                        <p class="font-weight-bold my-0 py-0"> <?php echo $row['voornaam']; ?></p>
                        <p class="font-weight-bold my-0 py-0">10-12-2020 | 11:19:45</p>
                        <p class="font-weight-bold my-0 py-0">€<?php echo $row['gebruiker_bod']; ?> </p>
                    </div>
                <?php } ?>


            </div>
        </div>
    </div>
    <div class="row">
        <!-- slider -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="sliderKop">Voorgestelde producten</div>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img class="productIMG img-fluid" src="../assets/images/GroteKonijn.jpg"
                                                     alt="Product">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Konijn</h4>
                                                <p class="item-price"><span>€369.00</span><span> tijd: 23:54</span></p>
                                                <div class="underline"></div>
                                                <div class="kop">Beschrijving</div>
                                                <div class="beschrijving">Dit is een konijn</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img class="productIMG img-fluid" src="../assets/images/GroteKonijn.jpg"
                                                     alt="Product">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Konijn</h4>
                                                <p class="item-price"><span>€369.00</span><span> tijd: 23:54</span></p>
                                                <div class="underline"></div>
                                                <div class="kop">Beschrijving</div>
                                                <div class="beschrijving">Dit is een konijn</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img class="productIMG img-fluid" src="../assets/images/GroteKonijn.jpg"
                                                     alt="Product">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Konijn</h4>
                                                <p class="item-price"><span>€369.00</span><span> tijd: 23:54</span></p>
                                                <div class="underline"></div>
                                                <div class="kop">Beschrijving</div>
                                                <div class="beschrijving">Dit is een konijn</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img class="productIMG img-fluid" src="../assets/images/GroteKonijn.jpg"
                                                     alt="Product">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Konijn</h4>
                                                <p class="item-price"><span>€369.00</span><span> tijd: 23:54</span></p>
                                                <div class="underline"></div>
                                                <div class="kop">Beschrijving</div>
                                                <div class="beschrijving">Dit is een konijn</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img class="productIMG img-fluid" src="../assets/images/GroteKonijn.jpg"
                                                     alt="Product">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Konijn</h4>
                                                <p class="item-price"><span>€369.00</span><span> tijd: 23:54</span></p>
                                                <div class="underline"></div>
                                                <div class="kop">Beschrijving</div>
                                                <div class="beschrijving">Dit is een konijn</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img class="productIMG img-fluid" src="../assets/images/GroteKonijn.jpg"
                                                     alt="Product">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Konijn</h4>
                                                <p class="item-price"><span>€369.00</span><span> tijd: 23:54</span></p>
                                                <div class="underline"></div>
                                                <div class="kop">Beschrijving</div>
                                                <div class="beschrijving">Dit is een konijn</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img class="productIMG img-fluid" src="../assets/images/GroteKonijn.jpg"
                                                     alt="Product">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Konijn</h4>
                                                <p class="item-price"><span>€369.00</span><span> tijd: 23:54</span></p>
                                                <div class="underline"></div>
                                                <div class="kop">Beschrijving</div>
                                                <div class="beschrijving">Dit is een konijn</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img class="productIMG img-fluid" src="../assets/images/GroteKonijn.jpg"
                                                     alt="Product">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Konijn</h4>
                                                <p class="item-price"><span>€369.00</span><span> tijd: 23:54</span></p>
                                                <div class="underline"></div>
                                                <div class="kop">Beschrijving</div>
                                                <div class="beschrijving">Dit is een konijn</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img class="productIMG img-fluid" src="../assets/images/GroteKonijn.jpg"
                                                     alt="Product">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Konijn</h4>
                                                <p class="item-price"><span>€369.00</span><span> tijd: 23:54</span></p>
                                                <div class="underline"></div>
                                                <div class="kop">Beschrijving</div>
                                                <div class="beschrijving">Dit is een konijn</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img class="productIMG img-fluid" src="../assets/images/GroteKonijn.jpg"
                                                     alt="Product">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Konijn</h4>
                                                <p class="item-price"><span>€369.00</span><span> tijd: 23:54</span></p>
                                                <div class="underline"></div>
                                                <div class="kop">Beschrijving</div>
                                                <div class="beschrijving">Dit is een konijn</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img class="productIMG img-fluid" src="../assets/images/GroteKonijn.jpg"
                                                     alt="Product">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Konijn</h4>
                                                <p class="item-price"><span>€369.00</span><span> tijd: 23:54</span></p>
                                                <div class="underline"></div>
                                                <div class="kop">Beschrijving</div>
                                                <div class="beschrijving">Dit is een konijn</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img class="productIMG img-fluid" src="../assets/images/GroteKonijn.jpg"
                                                     alt="Product">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>Konijn</h4>
                                                <p class="item-price"><span>€369.00</span><span> tijd: 23:54</span></p>
                                                <div class="underline"></div>
                                                <div class="kop">Beschrijving</div>
                                                <div class="beschrijving">Dit is een konijn</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include "../footer/footer.php"; ?>
