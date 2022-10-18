<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/page/login.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <title>Conection</title>

</head>

<body>

    <?php require "./view/header.inc.php"; ?>

    <div class="bannière">
        <h1>Connexion</h1>
    </div>
    <div class="login-box">
        <h2>Connexion</h2>
        <form>
            <div class="user-box">
                <input type="text" placeholder="Email">
            </div>

            <div class="user-box">
                <input type="password" placeholder="Mot de passe">
            </div>
            <div class="button-form">
                <a id="Connexion" href="#">Connexion</a>

                <div id="register">
                    Vous n'avez pas de compte ?
                    <a id="cheap" href="./register.php">Créer un compte</a>
                </div>
            </div>
        </form>
    </div>

    <?php require "./view/footer.inc.php"; ?>

</body>

</html>

<script src="https://kit.fontawesome.com/f8f2a2e311.js" crossorigin="anonymous"></script>