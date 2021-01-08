<?php
  Include 'C:\wamp64\www\BunnyWikki\bunnywiki\Database\DB_connect.php'
 ?>
<!--Social media koppelingen?-->
<!--Bunnystuff.nl-->
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/home.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/login_registratie.css">
  <link rel="stylesheet" href="../assets/css/overzichten/gebruikers.css">
  <link rel="stylesheet" href="../assets/css/overzichten/producten.css">
  <link rel="stylesheet" href="../assets/css/overzichten/biedingen.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Bunnywiki</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 mx-auto">
        <table class="table">
          <?php
            $connect = mysqli_query($conn , 'SELECT * FROM gebruikers');
            while($row = mysqli_fetch_array($connect)){ ?>
          <tr class="tableTop">
            <th colspan="2">ID</th>
            <th colspan="2">Naam</th>
            <th colspan="2">Achternaam</th>
            <th colspan="2">E-mail</th>
          </tr>
          <tr class="header tableUpperMid">
            <td colspan="2"><?php echo $row['gebruiker_id']; ?><span>+</span></td>
            <td colspan="2"><?php echo $row['voornaam']; ?></td>
            <td colspan="2"><?php echo $row['achternaam']; ?></td>
            <td colspan="2"><?php echo $row['email']; ?></td>
          </tr>
          <tr class="none tableMid">
            <th>Geboortedatum</th>
            <th>Woonplaats</th>
            <th>Postcode</th>
            <th>Telefoonnummer</th>
            <th>Rol</th>
            <th>Gebruiker Wijzigen</th>
            <th>Gebruiker verwijderen</th>
          </tr>
          <tr class="none tableBottom">
            <th><?php echo $row['geboortedatum']; ?></th>
            <th><?php echo $row['woonplaats']; ?></th>
            <th><?php echo $row['postcode']; ?></th>
            <th><?php echo $row['telefoonnummer']; ?></th>
            <th><?php echo $row['rol']; ?></th>
            <td colspan="1"><button class="globalBtn Wijzigen">Wijzigen</button></td>
            <td colspan="1"><button class="globalBtn Verwijderen">Verwijderen</button></td>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
  <script>
    $('.header').click(function() {
      $(this).find('span').text(function(_, value) {
        return value == '+' ? '-' : '+'
      });
      $(this).nextUntil('tr.header').slideToggle(100, function() {});
    });
  </script>
