<?php
    include 'DB_connect.php';

    /* $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
        }
    } */

    @$name = $_FILES['file']['name'];
    @$size = $_FILES['file']['size'];
    @$type = $_FILES['file']['type'];
    @$tmp_name = $_FILES['file']['tmp_name'];
    if (isset($name)) {
        if (!empty($name)) 
        {
        $location = 'uploads/';
        if (move_uploaded_file($tmp_name, $location. $name));
        echo 'Uploaded';
        }
        else 
        {
            echo 'Please choose a file';
        }   
    }

    $product_naam = mysqli_real_escape_string($conn, $_REQUEST['product_naam']);
    $product_omschrijving = mysqli_real_escape_string($conn, $_REQUEST['product_omschrijving']);
    $product_minimumbod = mysqli_real_escape_string($conn, $_REQUEST['product_minimumbod']);

    $sql = "INSERT INTO producten (naam, beschrijving, minimumbod) VALUES ('$product_naam', '$product_omschrijving', '$product_minimumbod')";
        if(mysqli_query($conn, $sql)){
            echo "Records added successfully.";
            header("Location: product_toevoegen-pagina.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
?>