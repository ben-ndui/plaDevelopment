<?php

    $app = App::getInstance();

    $app->title = "ADMINISTRATION PLA";

?>

<header class="header header-pages">
    <nav class="header-nav-bar">
        <div class="header-nav-bar-humburger">
            <div class="humburger-bar humburger-bar-first"></div>
            <div class="humburger-bar humburger-bar-sec"></div>
            <div class="humburger-bar humburger-bar-third"></div>
        </div>

        <ul class="menu-coulissant">
            <li><a href="index.php?page=home" name="#" class="link link-nav-bar">DECONNEXION</a></li>
        </ul>

        <div class="menu">
            <ul>
                <li><a href="index.php?page=home" name="#" class="link link-nav-bar">DECONNEXION</a></li>
            </ul>
        </div>
    </nav>

    <div class="logo"></div>

    <div class="logo-and-title">
        <h1>
            <?= $app->title ;?>
        </h1>
    </div>

</header>
