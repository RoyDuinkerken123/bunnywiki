<?php
session_start();
include "../Database/DB_connect.php";
$fout = "FOUT: Status kon niet worden geüpdate.";

function fout_alert($fout) {
    echo "<script> alert('$fout');</script>";
}

if(isset($_GET["nonactief"])){
    $id = $_GET["nonactief"];
    if($conn->query("UPDATE producten SET status='0' WHERE product_id=$id")){

    } else {
        fout_alert($fout);
    }
}

if(isset($_GET["archiveren"])){
    $id = $_GET["archiveren"];
    if($conn->query("UPDATE producten SET status='2' WHERE product_id=$id")){

    } else {
        fout_alert($fout);
    }
}

if(isset($_GET["actief"])){
    $id = $_GET["actief"];
    if($conn->query("UPDATE producten SET status='1' WHERE product_id=$id")){

    } else {
        fout_alert($fout);
    }
}
?>
<body>
<div class="container">
    <div class="row">
        <?php
        include "../header/header.php";
        $connect = mysqli_query($conn , 'SELECT * FROM producten');
        while($row = mysqli_fetch_array($connect)){
            $status = $row['status'];
            if ($fout != ""){
                echo '<div class="fout"> '. $fout . ' <br> Probeer het later nog eens. </div>';
            }
            ?>


            <div class="col-3 my-3">
                <div class="thumb-wrapper">
                    <div class="img-box">
                        <img class="productIMG" src="../assets/images/<?php echo $row['productafbeelding']; ?>" alt="Product">
                    </div>
                    <div class="thumb-content">
                        <h4><?php echo $row['naam']; ?></h4>
                        <p class="item-price"><span>Huidige bod: € <?php echo $row['minimumbod']; ?><br></p>
                        <div class="underline"></div>
                        <!-- <div class="kop">konijn</div> -->
                        <div class="beschrijving"><?php echo $row['beschrijving']; ?></div>
                        <?php
                        if ($status == 0) {
                            $status = 'Non-actief';
                        }
                        else if ($status == 1) {
                            $status = 'Actief';
                        }
                        else if ($status == 2) {
                            $status = 'In archief';
                        }
                        ?>
                        <div class="status"><span>Status: <?php echo $status; ?> </span></div>
                        <div class="actief"><?php echo "<td><a class='pl-0 button alert' href='overzicht-producten.php?actief=".$row["product_id"]."'>Actief zetten</a></td>"; ?></div>
                        <div class="non-actief"><?php echo "<td><a class='pl-0 button alert' href='overzicht-producten.php?nonactief=".$row["product_id"]."'>Non-actief zetten</a></td>"; ?></div>
                        <div class="archiveren"><?php echo "<td><a class='pl-0 button alert' href='overzicht-producten.php?archiveren=".$row["product_id"]."'>Archiveer product</a></td>"; ?></div>
                        <a href="aanpassen.php?id=<?php echo $row['product_id']; ?>">Edit</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include "../footer/footer.php" ?>
