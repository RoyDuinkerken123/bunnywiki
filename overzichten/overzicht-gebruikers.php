<?php
session_start();
include "../Database/DB_connect.php";
include "../header/header.php";
?>
<script type="text/javascript">
    notification = $("#notification");
    notification.hide();
</script>
<?php
if (isset($_GET['msg'])) {
?>
<script type="text/javascript">
    notification = $("#notification");
    notification.fadeIn(1000);
</script>
<?php
?>
<div id="notification" class="container-fluid text-center border-bottom border-dark text-white p-3 bg-success"
     style="position:absolute; top:0;z-index:8888;">
    <?php
    echo $_GET['msg'];
    ?>
    <script type="text/javascript">
        notification = $("#notification");
        notification.fadeOut(3000);

    </script>
    <?php
    $_GET['msg'] = '';
    }
    ?>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mx-auto">
            <table class="table">
                <?php
                $result = mysqli_query($conn, 'SELECT * FROM gebruikers');
                while ($row = mysqli_fetch_array($result)) { ?>
                    <tr class="tableTop">
                        <th colspan="2">ID</th>
                        <th colspan="2">Naam</th>
                        <th colspan="2">Achternaam</th>
                        <th colspan="2">E-mail</th>
                    </tr>
                    <tr class="header tableUpperMid">
                        <td colspan="2"><?php echo $row['gebruiker_id']; ?><span>+</span></td>
                        <td colspan="2"><?php echo $row['voornaam']; ?></td>
                        <td colspan="2"><?php echo $row['achternaam']; ?></td>
                        <td colspan="2"><?php echo $row['email']; ?></td>
                    </tr>
                    <tr class="none tableMid">
                        <th>Geboortedatum</th>
                        <th>Woonplaats</th>
                        <th>Postcode</th>
                        <th>Telefoonnummer</th>
                        <th>Rol</th>
                        <th>Gebruiker Wijzigen</th>
                        <th>Gebruiker Verwijderen</th>
                    </tr>
                    <tr class="none tableBottom">
                        <th><?php echo $row['geboortedatum']; ?></th>
                        <th><?php echo $row['woonplaats']; ?></th>
                        <th><?php echo $row['postcode']; ?></th>
                        <th><?php echo $row['telefoonnummer']; ?></th>
                        <th><?php echo $row['rol']; ?></th>
                        <td colspan="1">
                            <button class="globalBtn Wijzigen">Wijzigen</button>
                        </td>
                        <td colspan="1">
                            <form method="POST" action="gebruiker_verwijderen.php" class="m-0 p-0">
                                <input type="hidden" name="verwijderId" value="<?php echo $row['gebruiker_id']; ?>">
                                <button class="globalBtn Verwijderen">Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                <?php }
                        ?>
            </table>
        </div>
    </div>
</div>
<script>
    $('.header').click(function () {
        $(this).find('span').text(function (_, value) {
            return value == '+' ? '-' : '+'
        });
        $(this).nextUntil('tr.header').slideToggle(100, function () {
        });
    });
</script>
<?php include "../footer/footer.php"; ?>
