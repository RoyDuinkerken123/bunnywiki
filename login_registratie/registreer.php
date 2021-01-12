<?php include "../Database/DB_connect.php";
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$woonplaats = $_POST['woonplaats'];
$postcode = $_POST['postcode'];
$geboortedatum = $_POST['geboortedatum'];
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];


$sql = "INSERT INTO gebruikers (voornaam,achternaam,woonplaats,postcode,geboortedatum,email,wachtwoord) VALUES ('$voornaam','$achternaam','$woonplaats','$postcode','$geboortedatum','$email','$wachtwoord')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../login_registratie/login_registratie-pagina.php?msg=Succesvol geregistreerd");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
