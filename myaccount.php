<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/page/myaccount.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <title>Account</title>
</head>

<body>

    <?php require "./view/header.inc.php"; ?>

    <?php require "./include/database.inc.php"; ?>

    <div class="bannière" id="gras">Espace personnel</div>

    <div class="pseudo">
        <?php
        if (isset($_SESSION["pseudo"])) {
            echo "Vous etes connectez en temps que " . $_SESSION["pseudo"];
        } else {
            echo "Vous n'etes pas co";
        }

        ?>
    </div>

    <div class="alignement">
        <div class="formulaire0">
            <h2>Changement d'email</h2>
            <form>
                <div class="user-box">
                    <input type="text" placeholder="Ancien email">
                </div>

                <div class="user-box">
                    <input type="text" placeholder="Nouvel email">
                </div>
                <div class="user-box">
                    <input type="password" placeholder="Mot de passe">
                </div>
                <div class="user-box">
                    <input type="password" placeholder="Confirmer le mot de passe">
                </div>
                <div class="button-form">
                    <a id="change-email" href="#">Changer l'email</a>
                </div>
            </form>
        </div>

        <div class="formulaire1">
            <h2>Changement de mot de passe</h2>
            <div class="user-box">
                <input type="text" placeholder="Ancien mot de passe">
            </div>

            <div class="user-box">
                <input type="password" placeholder="Nouveau mot de passe">
            </div>
            <div class="user-box">
                <input type="password" placeholder="Confirmer le nouveau mot de passe">
            </div>
            <div class="button-form">
                <a id="change-password" href="#">Changer le mot de passe</a>
            </div>
        </div>
    </div>


    <?php require "./view/footer.inc.php"; ?>

</body>

</html>

<script src="https://kit.fontawesome.com/f8f2a2e311.js" crossorigin="anonymous"></script>