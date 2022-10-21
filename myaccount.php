<?php require_once "./include/database.inc.php"; ?>


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
    <?php
    $bdd = new BDD('localhost', 'puissance4', 'root', '', 'bdd');

    $bdd->getmybdd();
    ?>

    <?php require "./view/header.inc.php"; ?>

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
            <form method="POST" action="myaccount.php">
                <div class="user-box">
                    <input type="email" placeholder="Ancien email" name=oldMail>
                </div>

                <div class="user-box">
                    <input type="email" placeholder="Nouvel email" name="newMail">
                </div>
                <div class="user-box">
                    <input type="password" placeholder="Mot de passe" name="mdp">
                </div>
                <div class="user-box">
                    <input type="password" placeholder="Confirmer le mot de passe" name="confirmPswd">
                </div>

                <?php
                if (isset($_POST['validerEmail'])) {
                    if ($_POST['mdp'] != $_POST['confirmPswd']) {
                        echo '<p style="color: #ff0000; display: flex; justify-content: center; margin-bottom: 30px;">Les mots passe doivent être identiques</p>';
                        // } elseif ($_POST['oldMail'] != $_POST['newMail']) {
                        //     echo '<p style="color: #ff0000; display: flex; justify-content: center; margin-bottom: 30px;">Les adresses mails doivent être identiques</p>';
                    } else {
                        $bdd->updateEmail('users', $_POST['newMail'], $_POST['oldMail'], $_POST['mdp']);
                    }
                }

                ?>

                <div class="button-form">
                    <button id="Connexion" type="submit" name="validerEmail">Valider l'email</button>

                </div>
            </form>
        </div>

        <div class="formulaire1">
            <h2>Changement de mot de passe</h2>
            <form method="POST" action="myaccount.php">

                <div class="user-box">
                    <input type="text" placeholder="Ancien mot de passe" name="oldPassword">
                </div>

                <div class="user-box">
                    <input type="password" placeholder="Nouveau mot de passe" name="newPassword">
                </div>
                <div class="user-box">
                    <input type="password" placeholder="Confirmer le nouveau mot de passe" name="confirmPassword">

                    <?php
                    if (isset($_POST['validerPasword'])) {
                        $maj = preg_match('@[A-Z]@', $_POST['newPassword']);
                        $min = preg_match('@[a-z]@', $_POST['newPassword']);
                        $number = preg_match('@[0-9]@', $_POST['newPassword']);
                        $special = preg_match('@[^\w]@', $_POST['newPassword']);
                        if ($_POST['newPassword'] != $_POST['confirmPassword']) {
                            echo '<p style="color: #ff0000; display: flex; justify-content: center; margin-bottom: 30px;">Les mots passe doivent être identiques</p>';
                        } elseif (!$maj || !$min || !$number || !$special) {
                            echo '<p style="color: #ff0000; display: flex; justify-content: center; margin-bottom: 30px;">Les mots passe doit contenir au moins une minuscule ,une majuscule, un chiffre,un caractére spécial</p>';
                        } else {
                            $bdd->updatePasword('users', $_POST['oldPassword'], $_POST['newPassword']);
                        }
                    }

                    ?>

                </div>
                <div class="button-form">
                    <button id="change-password" type="submit" name="validerPasword">Changez le mot de passe</button>
                </div>
            </form>
        </div>
    </div>


    <?php require "./view/footer.inc.php"; ?>

</body>

</html>

<script src="https://kit.fontawesome.com/f8f2a2e311.js" crossorigin="anonymous"></script>