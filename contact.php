<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/page/contact.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <title>Contact</title>
</head>

<body>


    <?php require "./view/header.inc.php"; ?>


    <div class="bannière">
        <h1>NOUS CONTACTER</h1>
    </div>


    <!-- page contact -->
    <section class="information">
        <section class="info_img">
            <ul>
                <section class="num">
                    <div class="cercle"><i class="fa-solid fa-mobile-screen-button"></i></div>
                    <li>06 61 80 49 27</li>
                </section>
                <section class="email">
                    <div class="cercle"><i class="fa-regular fa-envelope"></i></div>
                    <li>celianloisel@gmail.com</li>
                </section>
                <section class="position">
                    <div class="cercle"><i class="fa-solid fa-location-dot"></i></div>
                    <li>Cergy</li>
                </section>
            </ul>
        </section>
    </section>
    <?php
        if (isset($_POST['valider'])) {
            if (empty($_POST['nom']) || empty($_POST['email']) ||empty($_POST['sujet'])) {
                echo '<p style="color: #ff0000; display: flex; justify-content: center; margin-bottom: 30px; margin-top: 100px;">Veuillez remplir tout les champs</p>';
            } elseif (strlen($_POST['message']) < 14) {
                echo '<p style="color: #ff0000; display: flex; justify-content: center; margin-bottom: 30px; margin-top: 100px;">Le message doit faire au moins 15 characters</p>';
            } else {
                echo '<p style="color: #32a852; display: flex; justify-content: center; margin-bottom: 30px; margin-top: 100px;">Message envoyé</p>';
            }
        }
        ?>
    <form class="formulaire" method="POST" action="./contact.php">
        <section class="tout">
            <section class="haut">
                <input type="nom" placeholder="Nom" name="nom">
                <input id="email" type="email" placeholder="Email" name="email">
            </section>
            <section class="bas">
                <input type="sujet" placeholder="Sujet" name="sujet">
                <textarea id="message" type="text" placeholder="Message" name="message"></textarea>
            </section>
            <input id="aaaaa" type="submit" value="Envpyer" name="valider">
        </section>
    </form>

    <?php require "./view/footer.inc.php"; ?>

</body>

</html>

<script src="https://kit.fontawesome.com/f8f2a2e311.js" crossorigin="anonymous"></script>