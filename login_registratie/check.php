<?php
session_start();
include "../Database/DB_connect.php";

$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

$sql = "SELECT gebruiker_id FROM gebruikers WHERE email = '$email' AND wachtwoord = '$wachtwoord'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    header("Location: ../home/index.php");
    $row = mysqli_fetch_array($result);
    $_SESSION['ingelogd'] = 1;
    $_SESSION['id'] = $row['gebruiker_id'];
    $_SESSION['voornaam'] = $row['voornaam'];
    $_SESSION['achternaam'] = $row['achternaam'];
    $_SESSION['email'] = $email;
} else {
    echo "Foute inloggegevens! Probeer het opnieuw!";
}


