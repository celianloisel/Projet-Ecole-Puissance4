<?php require_once "./include/database.inc.php"; ?>

<header>
    <nav>
        <section class="left">
            <a href="./index.php">
                <h1>The Power Of Memory</h1>
            </a>
        </section>

        <section class="right">
            <ul>
                <li><a href="
                <?php
                if (!isset($_SESSION["pseudo"])) {
                    echo 'login.php';
                } else {
                    echo 'memory.php';
                }
                ?>
                ">JEU</a></li>
                <li><a href="
                <?php
                if (!isset($_SESSION["pseudo"])) {
                    echo 'login.php';
                } else {
                    echo 'scores.php';
                }
                ?>
                ">SCORES</a></li>
                <li><a href="
                <?php
                if (!isset($_SESSION["pseudo"])) {
                    echo 'login.php';
                } else {
                    echo 'contact.php';
                }
                ?>
                ">CONTACT</a></li>
                <li><a href="
                <?php
                if (!isset($_SESSION["pseudo"])) {
                    echo 'login.php';
                } else {
                    echo 'myaccount.php';
                }
                ?>
                "><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </section>
    </nav>
</header>