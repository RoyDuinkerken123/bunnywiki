<?php

include "../Database/DB_connect.php";

$id = $_GET['id']; 

$del = mysqli_query($conn,"delete from biedingen where bieding_id = '$id'");

if($del)
{
    mysqli_close($conn); 
    header("location:overzicht-biedingen.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>