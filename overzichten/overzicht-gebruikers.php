<?php
	session_start();
	include "../Database/DB_connect.php";
	include "../header/header.php";
	?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" name="viewport" content="width-device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/gebruikers.css" />
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

	<script type="text/javascript">
		notification = $("#notification");
		notification.hide();
	</script>
	<?php
	if (isset($_GET['msg'])) {
	?>
	<script type="text/javascript">
		notification = $("#notification");
		notification.fadeIn(1000);
	</script>
	<?php
	?>
	<div id="notification" class="container-fluid text-center border-bottom border-dark text-white p-3 bg-success" style="position:absolute; top:0;z-index:8888;">
		<?php
	    echo $_GET['msg'];
	    ?>
		<script type="text/javascript">
			notification = $("#notification");
			notification.fadeOut(3000);
		</script>
		<?php
	    $_GET['msg'] = '';
	    }
	    ?>

		<div class="container-fluid">
			<div class="row">
				<div class="col-12 mx-auto">
					<table class="table">
						<tbody style="background-color:#fff;">
							<?php
					require "../Database/DB_connect.php";
					$query = mysqli_query($conn, "SELECT * FROM `gebruikers`") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
				?>
							<tr class="tableTop">
								<th colspan="2">ID</th>
								<th colspan="2">Naam</th>
								<th colspan="2">Achternaam</th>
								<th colspan="2">E-mail</th>
							</tr>
							<tr class="header tableUpperMid">
								<td colspan="2"><?php echo $fetch['gebruiker_id']; ?><span>+</span></td>
								<td colspan="2"><?php echo $fetch['voornaam']; ?></td>
								<td colspan="2"><?php echo $fetch['achternaam']; ?></td>
								<td colspan="2"><?php echo $fetch['email']; ?></td>
							</tr>
							<tr class="none tableMid">
								<th colspan="2">Woonplaats</th>
								<th colspan="2">Postcode</th>
								<th colspan="1">Telefoonnummer</th>
								<th colspan="1">Rol</th>
								<th colspan="1">Gebruiker Wijzigen</th>
								<th colspan="1">Gebruiker Verwijderen</th>
							</tr>
							<tr class="none tableBottom">
								<td colspan="2"><?php echo $fetch['woonplaats']; ?></td>
								<td colspan="2"><?php echo $fetch['postcode']; ?></td>
								<td colspan="1"><?php echo $fetch['telefoonnummer']; ?></td>
								<td colspan="1"><?php echo $fetch['rol']; ?></td>
								<td colspan="1"><button class="btn globalBtn Wijzigen" data-toggle="modal" type="button" data-target="#update_modal<?php echo $fetch['gebruiker_id']?>"> Wijzigen</button></td>
								<td colspan="1">
									<form method="POST" action="gebruiker_verwijderen.php" class="m-0 p-0">
										<input type="hidden" name="verwijderId" value="<?php echo $fetch['gebruiker_id']; ?>">
										<button class="globalBtn Verwijderen">Verwijderen</button>
									</form>
								</td>
								<?php

					include 'update_gebruiker.php';

					}
				?>
						</tbody>
					</table>
				</div>
			</div>
			<div>
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
</body>

</html>
