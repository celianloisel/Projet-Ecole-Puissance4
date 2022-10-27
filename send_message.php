<?php require_once "./include/database.inc.php"; 
$bdd = new BDD('localhost', 'puissance4', 'root', '', 'bdd');
$bdd->getmybdd();
?>

<?php
    //dans $_POST['message'] est stocké les data récupéré par chat_ajax.js qui a ensuite utilisé une methode post
    if (strlen($_POST['message']) > 3) {   //n'envoie que les message de plus de 3 caractère
        $bdd->insertMessage('messages', $_POST['message']);
    }
?>