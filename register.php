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
<?php
require_once './include/database.inc.php';
$bdd = new BDD('localhost', 'puissance4', 'root', '', 'bdd');

$bdd->getmybdd();
?>

<body>

    <?php require "./view/header.inc.php"; ?>


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
                if (strlen($_POST['passewordbdd']) < 8) {
                    echo '<p style="color: #ff0000; display: flex; justify-content: center; margin-bottom: 30px;">Le mot de passe doit faire plus de 8 character</p>';
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