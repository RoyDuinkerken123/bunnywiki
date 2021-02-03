<?php
    include "../Database/DB_connect.php";

    if(isset($_POST['submit'])) {
        $bod = $_POST['bod'];
        $sql = "INSERT INTO biedingen (gebruiker_bod) VALUES ('$bod')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            echo "Bod is toegevoegd";
        }
        else {
            echo mysqli_error($conn);
        }
    }
?>