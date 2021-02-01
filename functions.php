<?php

function checkRole($paginarol)  // 1, gebruiker - 2, verkoper - 3, administrator
{
    if($paginarol === 'gebruiker') {
        $paginarol = '1';
    } else if ($paginarol === 'verkoper') {
        $paginarol = '2';
    }
     else if ($paginarol === 'admin') {
         $paginarol = '3';
     }
    if($_SESSION['rol'] !== $paginarol) {
        header("Location: ../home/index.php?msg=U heeft hier niet de juist rechten voor!");
    }
}

?>
