<?php

    $app = App::getInstance();

    $services = $app->getTable('Services')->all();
    $service = $app->getTable('Services')->find($_GET['id']);
    $apparence = $app->getTable('Site')->find(1);

?>

<header class="my-header header-pages">
    <img src="<?= $apparence->imgURL_home_page;?>">
    <nav class="header-nav-bar">
        <div class="header-nav-bar-humburger">
            <div class="humburger-bar humburger-bar-first"></div>
            <div class="humburger-bar humburger-bar-sec"></div>
            <div class="humburger-bar humburger-bar-third"></div>
        </div>

        <ul class="menu-coulissant">
            <li><a href="index.php?page=home" name="#" class="link link-nav-bar">ACCUEIL</a></li>
            <li><a href="#" name="#" class="link link-nav-bar">SERVICES</a></li>
            <li><a href="index.php?page=service&id=1" name="#" class="link link-nav-bar">MES PROJETS</a></li>
            <li><a href="index.php?page=contact" name="#" class="link link-nav-bar">ME CONTACTER</a></li>
            <li><a href="index.php?page=connexion" name="#" class="link link-nav-bar">CONNEXION</a></li>
        </ul>

        <div class="menu">
            <ul>
                <li><a href="index.php?page=home" name="#" class="link link-nav-bar">ACCUEIL</a></li>
                <li><a href="#" name="#" class="link link-nav-bar">SERVICES</a></li>
                <li><a href="index.php?page=project&id=1" name="#" class="link link-nav-bar">MES PROJETS</a></li>
                <li><a href="index.php?page=contact" name="#" class="link link-nav-bar">ME CONTACTER</a></li>
                <li><a href="index.php?page=connexion" name="#" class="link link-nav-bar">CONNEXION</a></li>
            </ul>
        </div>
    </nav>

    <div class="logo"></div>

    <div class="logo-and-title">
        <h1>
            <?= $service->title ;?>
        </h1>
    </div>

</header>
