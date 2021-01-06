<?php
    include 'DB_connect.php';

    $product_naam = mysqli_real_escape_string($conn, $_REQUEST['product_naam']);
    $product_omschrijving = mysqli_real_escape_string($conn, $_REQUEST['product_omschrijving']);
    $product_minimumbod = mysqli_real_escape_string($conn, $_REQUEST['product_minimumbod']);
    $product_status = mysqli_real_escape_string($conn, $_REQUEST['product_status']);
    $product_einddatum = mysqli_real_escape_string($conn, $_REQUEST['product_einddatum']);

    $sql = "INSERT INTO producten (naam, beschrijving, minimumbod, einddatum, status) VALUES ('$product_naam', '$product_omschrijving', '$product_minimumbod', '$product_einddatum', '$product_status')";
        if(mysqli_query($conn, $sql)){
            echo "Records added successfully.";
            header("Location: product_toevoegen-pagina.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
?>