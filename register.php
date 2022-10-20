<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/page/register.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">

    <title>Inscription</title>
</head>

<?php require "./view/header.inc.php"; ?>

<?php

$bdd = new BDD('localhost', 'puissance4', 'root', '', 'bdd');

$bdd->getmybdd();
?>

<body>

    <div class="bannière">
        <h1>Inscription</h1>
    </div>
    <div class="login-box">
        <h2>Inscription</h2>

        <form action="./register.php" method="POST">
            <div class="user-box">
                <input type="email" placeholder="Email" name="email">
            </div>

            <div class="user-box">
                <input type="text" placeholder="Pseudo" name="pseudo">
            </div>
            <div class="user-box">
                <input type="password" placeholder="Mot de passe" name="passewordbdd">
            </div>
            <div class="user-box">
                <input type="password" placeholder="Confirmer le mot de passe" name="pwdb">
            </div>
            <?php


            if (isset($_POST['submit'])) {
                $maj = preg_match('@[A-Z]@', $_POST['passewordbdd']);
                $min = preg_match('@[a-z]@', $_POST['passewordbdd']);
                $number = preg_match('@[0-9]@', $_POST['passewordbdd']);
                $special = preg_match('@[^\w]@', $_POST['passewordbdd']);
                if (strlen($_POST['passewordbdd']) < 8) {
                    echo '<p style="color: #ff0000; display: flex; justify-content: center; margin-bottom: 30px;">Le mot de passe doit faire plus de 8 caractére</p>';
                } elseif (!$maj || !$min || !$number || !$special) {
                    echo '<p style="color: #ff0000; display: flex; justify-content: center; margin-bottom: 30px;">Les mots passe doit contenir au moins une minuscule ,une majuscule, un chiffre,un caractére spécial</p>';
                } elseif ($_POST['passewordbdd'] != $_POST['pwdb']) {
                    echo '<p style="color: #ff0000; display: flex; justify-content: center; margin-bottom: 30px;">Les mots passe doivent être identiques</p>';
                } elseif (strlen($_POST['pseudo']) < 4) {
                    echo '<p style="color: #ff0000; display: flex; justify-content: center; margin-bottom: 30px;">Le pseudo est trop court</p>';
                } else {
                    $bdd->addUser('users', $_POST['email'], $_POST['passewordbdd'], $_POST['pseudo']);
                }
            }



            ?>
            <div class="button-form">
                <input type="submit" id="créer-le-compte" value="Finalisez l'inscription" name='submit'>

                <div id="login">
                    Vous avez déjà un compte ?
                    <a id="ss" href="./login.php">Connectez-vous</a>
                </div>
            </div>
        </form>

    </div>

    <?php require "./view/footer.inc.php"; ?>

</body>

</html>

<script src="https://kit.fontawesome.com/f8f2a2e311.js" crossorigin="anonymous"></script>