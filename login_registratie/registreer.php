<?php include "../Database/DB_connect.php";
//$voornaam = $_POST['voornaam'];
//$achternaam = $_POST['achternaam'];
//$woonplaats = $_POST['woonplaats'];
//$postcode = $_POST['postcode'];
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord']; 


$sql = "INSERT INTO gebruikers (email,wachtwoord) VALUES ('$email','$wachtwoord')"; 

if (mysqli_query($conn, $sql)) {
    header("Location: ../login_registratie/login_registratie-pagina.php?msg=Succesvol geregistreerd");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
