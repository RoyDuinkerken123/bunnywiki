<!--Social media koppelingen?-->
<!--Bunnystuff.nl-->
<?php
  Include '..\Database\DB_connect.php'
 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/home.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="stylesheet" href="../assets/css/overzichten/producten.css">
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/login_registratie.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Bunnywiki</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <?php
        $connect = mysqli_query($conn , 'SELECT * FROM producten'); 
        while($row = mysqli_fetch_array($connect)){
        $status = $row['status'];
          
        if(isset($_GET["nonactief"])){
          $id = $_GET["nonactief"];
          if($conn->query("UPDATE producten SET status='0' WHERE product_id=$id")){
                header('Location: overzicht-producten.php');
          } else { 
              echo "Status niet geupdate!";
          }    
        }

        if(isset($_GET["archiveren"])){
          $id = $_GET["archiveren"];
          if($conn->query("UPDATE producten SET status='2' WHERE product_id=$id")){
                header('Location: overzicht-producten.php');
          } else { 
              echo "Status niet geupdate!";
          }    
        } 

        if(isset($_GET["actief"])){
          $id = $_GET["actief"];
          if($conn->query("UPDATE producten SET status='1' WHERE product_id=$id")){
                header('Location: overzicht-producten.php');
          } else { 
              echo "Status niet geupdate!";
          }    
        } 
      ?>
        

      <div class="col-3">
        <div class="thumb-wrapper">
          <div class="img-box">
            <img class="productIMG" src="../assets/images/<?php echo $row['productafbeelding']; ?>" alt="Product">
          </div>
          <div class="thumb-content">
            <h4><?php echo $row['naam']; ?></h4>
            <p class="item-price"><span>Huidige bod: € <?php echo $row['minimumbod']; ?><br>
            </span><span><i class="fas fa-clock" style="margin-right: 5px;"></i><?php echo $row['einddatum']; ?></span></p>
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
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</body>
