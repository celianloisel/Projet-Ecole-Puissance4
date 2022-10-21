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
    
    <?php require "./view/header.inc.php"; ?>

    <div class="bannière"><h1>Scores</h1></div>

    <!-- TABLEAU DES SCORES -->

    <section id="score_table_section">
        <table class="score_table">
            <thead>
                <tr>
                    <th>Jeu</th>
                    <th>Pseudo</th>
                    <th>Difficulté</th>
                    <th>Score</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pokemon</td>
                    <td>Quentin</td>
                    <td>2</td>
                    <td>56</td>
                    <td>06/09/22 : 19h42</td>
                </tr>
                <tr class="a@ctive-row">
                    <td>Pokemon</td>
                    <td>Khaled</td>
                    <td>1</td>
                    <td>9</td>
                    <td>06/09/22 : 14h22</td>
                </tr>
                <tr>
                    <td>Pokemon</td>
                    <td>Matteo</td>
                    <td>1</td>
                    <td>0</td>
                    <td>06/09/22 : 15h42</td>
                </tr>
                <tr>
                    <td>Pokemon</td>
                    <td>Célian</td>
                    <td>1</td>
                    <td>2</td>
                    <td>06/09/22 : 09h30</td>
                </tr>
                <tr>
                    <td>Pokemon</td>
                    <td>Matteo</td>
                    <td>1</td>
                    <td>0</td>
                    <td>06/09/22 : 15h42</td>
                </tr>
                <tr>
                    <td>Pokemon</td>
                    <td>Célian</td>
                    <td>1</td>
                    <td>2</td>
                    <td>06/09/22 : 09h30</td>
                </tr>
                <tr>
                    <td>Pokemon</td>
                    <td>Quentin</td>
                    <td>2</td>
                    <td>56</td>
                    <td>06/09/22 : 19h42</td>
                </tr>

            </tbody>
        </table>
    </section>

    <?php require "./view/footer.inc.php"; ?>

</body>

</html>

<script src="https://kit.fontawesome.com/f8f2a2e311.js" crossorigin="anonymous"></script>