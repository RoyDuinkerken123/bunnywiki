<?php
session_start();
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

<div class="container p-0">
    <div class="row justify-content-between">
        <div class="col-lg-5 text-white">
            <form action="check.php" method="POST" name="loginForm" id="loginForm" class="bg-dark p-4">
                <div class="title">Inloggen</div>
                <div class="form-group">
                    <input type="text" name="email" placeholder="E-mailadres">
                </div>
                <div class="form-group">
                    <input type="password" name="wachtwoord" placeholder="Wachtwoord">
                </div>
                <a href="#"> Wachtwoord vergeten </a>
                <button name="loginBtn" class="globalBtn my-4"> Login</button>
            </form>
        </div>

        <div class="col-lg-6 text-white">
            <form action="registreer.php" method="POST" name="loginForm" id="registerForm" class="bg-dark p-4">
                <div class="title">Registreren</div>
                <div class="form-group">
                    <input type="text" name="email" placeholder="E-mailadres">
                </div>
                <input type="password" name="wachtwoord" placeholder="Wachtwoord">
                <div class="form-group">
                    <input type="password" name="bevestigWachtwoord" placeholder="Bevestig wachtwoord">
                </div>
                <p> Minimaal 8 karakters. </p>
                <button onclick="registerUser(this.form);" name="registerBtn" class="globalBtn my-4"> Registreren
                </button>
            </form>

            <script type="text/javascript">

                function registerUser(f) {
                    $.ajax({
                        type: "POST",
                        url: "registreer.php",
                        data: {
                            voornaamData: f.voornaam.value,
                            achternaamData: f.achternaam.value,
                            woonplaatsData: f.woonplaats.value,
                            postcodeData: f.postcode.value,
                            emailData: f.email.value,
                            geboortedatumData: f.geboortedatum.value,
                            wachtwoordData: f.wachtwoord.value
                        }
                    })
                        .done(function () {
                            alert("Succesvol geregistreerd!");
                            notification = $("#notification");
                            notification.fadeIn();
                            notification.fadeOut(3000);
                        })
                }
            </script>

        </div>
    </div>
</div>
<?php include "../footer/footer.php"; ?>
