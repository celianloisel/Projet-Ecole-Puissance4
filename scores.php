<?php require_once "./include/database.inc.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/page/scores.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">

    <link rel="stylesheet" href="./assets/css/page/scores.css">
    <title>Scores</title>
</head>

<body>

    <?php require "./view/header.inc.php";
    $bdd = new BDD('localhost', 'puissance4', 'root', '', 'bdd');

    $bdd->getmybdd();
    ?>

    <div class="bannière">
        <h1>Scores</h1>
    </div>

    <!-- TABLEAU DES SCORES -->

    <section id="score_table_section">
        <!-- formulaire pour gerer le sorting -->
        <form action="scores.php" method="POST">

            <div class="form_section">
                <label>sorting</label>
                <select name="sorting">
                    <option value="date">date</option>
                    <option value="score">score</option>
                    <option value="pseudo">pseudo</option>
                    <option value="difficulty">difficulty</option>
                </select>
            </div>

            <div class="form_section">
                <label>onlyMe</label>
                <input type="checkbox" value="onlyMe" name="onlyMe">
            </div>

            <div>
                <input type="submit" id="valider" value="Valider" name="sorting_submit">
            </div>
        </form>

        <!-- formulaire pour etre en mode vision des scores personnel uniquement -->

        <table class="score_table">
            <thead>
                <tr>
                    <th>jeu</th>
                    <th>difficultée</th>
                    <th>joueur</th>
                    <th>score</th>
                    <th>date partie</th>
                </tr>
            </thead>

            <!-- pour chaque ligne de la tale scores, on va l'affecter a la variable score et lui appliquer un traitement pour qu'elle affiche (echo) les donnée de colones dans différent balises <th> -->
            <tbody>
                <?php
                if (isset($_POST['onlyMe'])) {
                    $bdd->genScores('scores', $_POST['sorting'], $_POST['onlyMe']);
                } else {
                    $bdd->genScores('scores', $_POST['sorting'], null);
                }
                ?>
            </tbody>
        </table>
    </section>

    <?php require "./view/footer.inc.php"; ?>

</body>

</html>

<script src="https://kit.fontawesome.com/59083c418d.js" crossorigin="anonymous"></script>