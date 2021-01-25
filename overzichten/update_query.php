<?php
	require_once "../Database/DB_connect.php";

	if(ISSET($_POST['update'])){
		$gebruiker_id = $_POST['gebruiker_id'];
		$voornaam = $_POST['voornaam'];
		$achternaam = $_POST['achternaam'];
		$email = $_POST['email'];
		$woonplaats = $_POST['woonplaats'];
		$postcode = $_POST['postcode'];
		$telefoonnummer = $_POST['telefoonnummer'];
		$rol = $_POST['rol'];

		mysqli_query($conn, "UPDATE `gebruikers` SET `voornaam` = '$voornaam', `achternaam` = '$achternaam', `email` = '$email' , `woonplaats` = '$woonplaats' , `postcode` = '$postcode' , `telefoonnummer` = '$telefoonnummer' , `rol` = '$rol' WHERE `gebruiker_id` = '$gebruiker_id'") or die(mysqli_error());

		header("location: ../overzichten/overzicht-gebruikers.php");
}
