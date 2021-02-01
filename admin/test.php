<?php session_start();
include "../Database/DB_connect.php";
include "../functions.php";
checkRole('admin');
include "../header/header.php";
?>
<div class="row justify-content-center">
    <h1> Hey dit is geheime informatie </h1>
</div>
<?php include "../footer/footer.php"; ?>
