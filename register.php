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

<body>

    <?php require "./view/header.inc.php"; ?>

    <div class="bannière"><h1>Inscription</h1></div>
    <div class="login-box">
        <h2>Inscription</h2>
        <form>
            <div class="user-box">
                <input type="text" placeholder="Email">
            </div>

            <div class="user-box">
                <input type="password" placeholder="Pseudo">
            </div>
            <div class="user-box">
                <input type="password" placeholder="Mot de passe">
            </div>
            <div class="user-box">
                <input type="password" placeholder="Confirmer le mot de passe">
            </div>
            <div class="button-form">
                <a id="créer-le-compte" href="#">Finalisez l'inscription</a>

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