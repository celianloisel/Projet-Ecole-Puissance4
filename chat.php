<?php require_once "./include/database.inc.php"; ?>

<div class="chat">
    <div class="titre">
        <img src="./assets/images/chat/69001805-icône-de-chat-icône-noire-sur-fond-transparent-.webp" alt="img">
        <h1>Général</h1>
    </div>
    <div class="body">
        <?php
        require_once('./include/database.inc.php');

        $bdd = new BDD('localhost', 'puissance4', 'root', '', 'bdd');
        $bdd->getmybdd();

        $bdd->selectMessage('messages');

        ?>
    </div>
    <div class="message">
        <form action="./memory.php" method="POST" id="message_form">
            <input type="text" placeholder="Message" name="message">
            <button type="submit" name="valider"><i class="fa-solid fa-paper-plane"></i></button>
        </form>

        <?php
            //dans $_POST['message'] est stocké les data récupéré par chat_ajax.js qui a ensuite utilisé une methode post
            if (strlen($_POST['message']) > 3) {   //n'envoie que les message de plus de 3 caractère
                $bdd->insertMessage('messages', $_POST['message']); 
            }
        ?>
    </div>
</div>

<script src="./script/chat_ajax.js"></script>