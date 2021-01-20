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
        // $connect = mysqli_query($conn , 'SELECT * FROM producten'); 
        // while($row = mysqli_fetch_array($connect))
        // {

      $id = $_GET['id'];
      $query = mysqli_query($conn, "SELECT * FROM producten WHERE id='$id'");
      $result = mysqli_query($connection,$query);


      

      if (isset($_POST['update'])) {
        $product_naam = $_POST['product_naam'];
        $product_omschrijving = $_POST['product_omschrijving'];
        $product_minimumbod = $_POST['product_minimumbod'];

        $edit = mysqli_query($conn, "UPDATE producten SET naam='$product_naam', omschrijving='$product_omschrijving', minimumbod='$product_minimumbod' WHERE id='$id'");

        if($edit)
        {
          mysqli_close($conn); // Close connection
          header("location:overzicht-producten.php"); // redirects to all records page
          exit;
        }
          else
        {
            echo mysqli_error();
        }    	
      }

      ?>
        
  <div class="container p-0">
    <div class="row justify-content-center">
        <div class="col-lg-7 text-white">
            <form method="POST" class="persoonlijkProfiel bg-dark p-4" enctype="multipart/form-data">  
                <h4 class="pb-2"> Product toevoegen </h4>
                <label>Product naam:</label>
                <div class="form-group mt-0"><input type="text" id="product_naam" name="product_naam" value="<?php echo $data['naam'] ?>"></div>
                <label>Product omschrijving:</label>
                <div class="form-group mt-0"><textarea class="form-control p-1" id="product_omschrijving" name="product_omschrijving" rows="3" value="<?php echo $data['omschrijving'] ?>" ></textarea></div>
                <label>Minimum bod:</label>
                <div class="form-group mt-0"><input type="number" width="100%" id="product_minimumbod" name="product_minimumbod" value="<?php echo $data['minimumbod'] ?>"></div>
                <label>Kies een foto:</label>
                <div class="form-group mt-0"><input type="file" name="file" id="file"></div>
                <div class="ml-0 form-group align-items-center justify-content-between">
                    <input type="submit" class="globalBtn" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
  </div>

      
          

    </div>
  </div>
</body>
