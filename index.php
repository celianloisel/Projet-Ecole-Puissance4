<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/page/index.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <title>HomeV2</title>

</head>


<body>


    <?php require "./view/header.inc.php"; ?>

    <section id="hero">
        <h1>BIENVENUE DANS NOTRE STUDIO !</h1>
        <h3>Venez challenger les cerveaux les plus agiles !</h3>
        <a href="./login.php">Jouer !</a>
    </section>


    <section id="themes">
        <div class="card">
            <div class="card_image_01"> </div>
            <div class="card_infos">
                <p class="card_number">01</p>
                <div class="card_text">
                    <h1>Pokemon</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos vel sapiente mollitia nulla
                        repudiandae, quas debitis, fugiat laboriosam illum aliquam vero? Dignissimos eius ab tenetur
                        totam pariatur culpa eveniet explicabo!
                    </p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card_image_02"> </div>
            <div class="card_infos">
                <p class="card_number">02</p>
                <div class="card_text">
                    <h1>Yu-Gi-Oh</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos vel sapiente mollitia nulla
                        repudiandae, quas debitis, fugiat laboriosam illum aliquam vero? Dignissimos eius ab tenetur
                        totam pariatur culpa eveniet explicabo!
                    </p>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card_image_03"> </div>
            <div class="card_infos">
                <p class="card_number">03</p>
                <div class="card_text">
                    <h1>Emojis</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos vel sapiente mollitia nulla
                        repudiandae, quas debitis, fugiat laboriosam illum aliquam vero? Dignissimos eius ab tenetur
                        totam pariatur culpa eveniet explicabo!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------- STATISTIQUES --------------------------->
    <section id="statistiques">
        <div class="stats_illust">
            <img src="./assets/images/index/stat_illust_2.jpeg" alt="">
        </div>
        <div class="stats_infos">
            <div class="stats_infos_haut">
                <div class="stats_infos_section_1">
                    <h2 class="stats_nombre">310</h2>
                    <h3 class="stats_titre">Parties Jouées</h3>
                </div>
                <div class="stats_infos_section_2">
                    <h2 class="stats_nombre">10 sec</h2>
                    <h2 class="stats_titre">Temps Record</h2>
                </div>
            </div>
            <div class="stats_infos_bas">
                <div class="stats_infos_section_3">
                    <h2 class="stats_nombre">1020</h2>
                    <h2 class="stats_titre">Joueurs Connectés</h2>
                </div>

                <div class="stats_infos_section_4">
                    <h2 class="stats_nombre">21 300</h2>
                    <h2 class="stats_titre">Joueurs Inscrits</h2>
                </div>
            </div>
        </div>
    </section>


    <!--------------------------- NOTRE EQUIPE --------------------------->
    <section id="notre_equipe">
        <div class="notre_equipe_text">
            <h1>Notre Equipe</h1>
            <p>Des employés au corps d'acier et au coeur d'or !</p>
            <div class="text_separator_container"><img src="./assets/images/index/team_text_separator_fit.png" alt="text_separator"></div>
        </div>
        <div class="notre_equipe_cards">

            <!-- PREMIER MEMBRE -->
            <div class="equipe_card">
                <div class="profil_container"> <img src="./assets/images/index/profil_01.jpeg" alt=""> </div>
                <h2>Célian Loisel</h2>
                <h3>Git Master</h3>
                <ul>
                    <a href="https://www.facebook.com/">
                        <li>
                            <i class="fa-brands fa-facebook-f"></i>
                        </li>
                    </a>
                    <a href="https://www.twitter.com/">
                        <li>
                            <i class="fa-brands fa-twitter"></i>
                        </li>
                    </a>
                    <a href="https://www.pinterest.fr/">
                        <li>
                            <i class="fa-brands fa-pinterest"></i>
                        </li>
                    </a>
                </ul>
            </div>

            <!-- DEUXIEME MEMBRE -->
            <div class="equipe_card">
                <div class="profil_container"> <img src="./assets/images/index/profil_02.jpeg" alt=""> </div>
                <h2>DJ. Khaled</h2>
                <h3>Dieu du CSS</h3>
                <ul>
                    <a href="https://www.facebook.com/">
                        <li>
                            <i class="fa-brands fa-facebook-f"></i>
                        </li>
                    </a>
                    <a href="https://www.twitter.com/">
                        <li>
                            <i class="fa-brands fa-twitter"></i>
                        </li>
                    </a>
                    <a href="https://www.pinterest.fr/">
                        <li>
                            <i class="fa-brands fa-pinterest"></i>
                        </li>
                    </a>
                </ul>
            </div>

            <!-- TROISIEME MEMBRE  -->
            <div class="equipe_card">
                <div class="profil_container"> <img src="./assets/images/index/profil_03.png" alt=""> </div>
                <h2>Quentin Tresdoi</h2>
                <h3>Dieu du PHP</h3>
                <ul>
                    <a href="https://www.facebook.com/">
                        <li>
                            <i class="fa-brands fa-facebook-f"></i>
                        </li>
                    </a>
                    <a href="https://www.twitter.com/">
                        <li>
                            <i class="fa-brands fa-twitter"></i>
                        </li>
                    </a>
                    <a href="https://www.pinterest.fr/">
                        <li>
                            <i class="fa-brands fa-pinterest"></i>
                        </li>
                    </a>
                </ul>
            </div>


            <!-- QUATRIEME MEMBRE  -->
            <div class="equipe_card">
                <div class="profil_container"> <img src="./assets/images/index/profil_04.jpeg" alt=""> </div>
                <h2>Matteo Bruno</h2>
                <h3>Le gars sympa</h3>
                <ul>
                    <a href="https://www.facebook.com/">
                        <li>
                            <i class="fa-brands fa-facebook-f"></i>
                        </li>
                    </a>
                    <a href="https://www.twitter.com/">
                        <li>
                            <i class="fa-brands fa-twitter"></i>
                        </li>
                    </a>
                    <a href="https://www.pinterest.fr/">
                        <li>
                            <i class="fa-brands fa-pinterest"></i>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </section>

    <!--------------------------- PIED DE PAGE --------------------------->

    <?php require "./view/footer.inc.php"; ?>


</body>

</html>

<script src="https://kit.fontawesome.com/f8f2a2e311.js" crossorigin="anonymous"></script>