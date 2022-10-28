<?php require_once "./include/database.inc.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./assets/css/page/memory.css"> -->
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
    <h4 class="stats">
				<span>moves:</span>
				<span class="move"> 0 </span>,
                <span>scores:</span>
				<span class="score"> 0 </span>,
				<span>time:</span>
				<span id="time">00:00</span>
			</h4>
      
   
  
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
    <div id="time">00:00</div>

    <!-- bouton pour faire apparaitre la pop-up  -->
    <button onclick="openModal()">test</button>

    <div class="modal" id="modal">
        <div class="modal_gif"><img src="./assets/images/pop_up/girl_dance.gif" alt=""></div>
        <div class="modal_header">
            <div class="title">Votre score !</div>
            <button class="close_button" onclick="closeModal()">&times;</button>
        </div>
        <div class="modal_body">
            <div class="modal_text">
                <h3>Votre temps :</h3>
                <p id="display_temps_joueur">yoyo</p>
                <h3>Nombre de coups :</h3>
                <p id="display_infos_joueur"></p>
                <h3>Score final :</h3>
                <p id="display_score_joueur"></p>
            </div>
            <button onclick="" class="replay_button">REJOUER !</button>
        </div>
    </div>
    <!-- fond coloré  -->
    <div id="overlay"></div>

    <!-- JS pour la pop up -->

    <!-- bouton pour tester l'envoie du score -->
    <h1>Test AJAX</h1>
    <button onclick="envoyerScore ()"> clicker </button>
    <!-- recupération des donnée de l'ajax -->

    <?php 
        function displayResult() {
            
            echo ('hello Score    ;');
            // var_dump($_POST);
            // echo $_POST 
        
            // $scoreToSend = $_POST['score'];
            $timeToSend = $_POST['temps'];
            $coupToSend = $_POST['coups'];
        
            echo ('voici MES variable    :');
            // echo $scoreToSend;
            echo $timeToSend;
            echo $coupToSend;
        }
    ?>

    <?php require "./chat.php"; ?>

    <?php require "./view/footer.inc.php"; ?>

</body>

</html>

<script src="https://kit.fontawesome.com/59083c418d.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="./script/memory.js"></script>
<script src="./script/score.js"></script>
