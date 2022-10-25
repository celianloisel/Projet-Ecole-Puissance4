<?php require_once "./include/database.inc.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/page/memory.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/page/chat.css">
    <title>Memory</title>
</head>

<body>

    <?php require "./view/header.inc.php"; ?>

    <div class="bannière">
        <h1>Memory</h1>
    </div>

    <div class="menu">
        <form action="" method="POST">
            <select id="theme" name="theme">
                <option disabled selected value style="display:none">Veuillez choisir un thème</option>
                <option value="pokemon">Pokemon</option>
                <option value="yugioh">Yu-gi-oh</option>
                <option value="emoji">Emoji</option>
            </select>
            <select id="difficulty" name="difficulty">
                <option disabled selected value style="display:none">Veuillez choisir un thème</option>
                <option value="facile">Facile</option>
                <option value="intermediaire">Intermédiaire</option>
                <option value="expert">Expert</option>
                <option value="impossible">Impossible</option>
            </select>
            <button id="play" type="submit" name="valider">Jouer</button>
        </form>
    </div>

    <div id="errorMessage"></div>

    <div id="tableau"></div>

    <?php require "./chat.php"; ?>

    <?php require "./view/footer.inc.php"; ?>

</body>

</html>

<script src="https://kit.fontawesome.com/59083c418d.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="./script/memory.js"></script>