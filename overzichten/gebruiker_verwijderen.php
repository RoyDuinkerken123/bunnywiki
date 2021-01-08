<?php
Include '../Database\DB_connect.php';
$verwijderId = $_POST['verwijderId'];
$sql = "DELETE FROM gebruikers WHERE gebruiker_id = '$verwijderId';";
if (mysqli_query($conn, $sql)) {
    header("Location: overzicht-gebruikers.php?msg=Succesvol verwijderd!");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>
