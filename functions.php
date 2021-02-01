<?php session_start();
include "Database/DB_connect.php";

function checkRole(){ // 1, gebruiker - 2, verkoper - 3, administrator
	if($_SESSION['role'] === "1") {
        include "home/index.php?gebruiker";
    }
    else if ($_SESSION['role'] === "2") {
        include "home/index.php?verkoper";
    }
    else if ($_SESSION['role'] === "3") {
        include "home/index.php?admin";
    }
}





?>
