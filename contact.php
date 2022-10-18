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
    

    <div class="bannière"><h1>NOUS CONTACTER</h1></div>


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
    <section class="formulaire">
        <section class="tout">
            <section class="haut">
                <input type="nom" placeholder="Nom">
                <input id="email" type="email" placeholder="Email">
            </section>
            <section class="bas">
                <input type="sujet" placeholder="Sujet">
                <textarea id="message" type="text" placeholder="Message"></textarea>

            </section>
            <section class="envoyer">
                <button>Envoyer</button>
            </section>

        </section>
    </section>
    
    <?php require "./view/footer.inc.php"; ?>

</body>

</html>

<script src="https://kit.fontawesome.com/f8f2a2e311.js" crossorigin="anonymous"></script>