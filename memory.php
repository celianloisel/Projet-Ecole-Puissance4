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
    <h4 class="stats">
				<span>moves:</span>
				<span class="move"> 0 </span>,
                <span>scores:</span>
				<span class="score"> 0 </span>,
				<span>time:</span>
				<span class="time">00:00</span>
			</h4>
    <section class="memory-game">
    
    <div class="memory-card" data-framework="aurelia">
      <img class="card" src="./assets/images/theme/pokemon/400.png" alt="Aurelia" />
      <img class="back-card" src="./assets/images/theme/pokemon/470.png" alt="JS Badge" />
    </div>
    <div class="memory-card" data-framework="aurelia">
      <img class="card" src="./assets/images/theme/pokemon/400.png" alt="Aurelia" />
      <img class="back-card" src="./assets/images/theme/pokemon/470.png" alt="JS Badge" />
    </div>
    <div class="memory-card" data-framework="aurelia">
      <img class="card" src="./assets/images/theme/pokemon/400.png" alt="Aurelia" />
      <img class="back-card" src="./assets/images/theme/pokemon/470.png" alt="JS Badge" />
    </div>
    

    
  </section>

    <script src="./script/memory.js"></script>

    


    <?php require "./chat.php"; ?>

    <?php require "./view/footer.inc.php"; ?>

</body>

</html>

<script src="https://kit.fontawesome.com/59083c418d.js" crossorigin="anonymous"></script>