<?php
session_start();
include "../Database/DB_connect.php";
include "../header/header.php";
?>



<div class="container-fluid">
  <div class="title">Overzicht biedingen</div>
      <div class="row">
      <?php 
        $connect = mysqli_query($conn , 'SELECT * FROM biedingen');
        while($row = mysqli_fetch_array($connect)){
      ?>
          <div class="col-12 mx-auto">
              <table class="table table-striped table-dark">
               <tr>
                  <th>ID</th>
                  <th>Product_ID</th>
                  <th>Product Naam</th>
                  <th>Gebruiker_ID</th>
                  <th>Gebruikersnaam</th>
                  <th>Gebruiker_bod</th>
                  <th>Verwijderen</th>
                </tr>
                <tr>
                  <td><?php echo $row['bieding_id'] ?></td>
                  <td><?php echo $row['product_id'] ?></td>
                  <td>konijnenvoer</td>
                  <td><?php echo $row['gebruiker_id'] ?></td>
                  <td>Roy</td>
                  <td>€256,99</td>
                  <td><a href="delete.php?id=<?php echo $row['bieding_id']; ?>">Verwijderen</a></td>
                </tr>
            </table>
          </div>
          <?php } ?>
      </div>
    </div>
<?php include "../footer/footer.php"; ?>
