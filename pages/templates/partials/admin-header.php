<?php

    $app = App::getInstance();

    $app->title = "CREER - MODIFIER - AJOUTER  SUPPRIMER";

    $apparence = $app->getTable('Site')->find(1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= \App::getInstance()->title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ID=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Ben NDUI" content="">
    <link rel="stylesheet" href="css/standart/dashboard.css">
    <link rel="stylesheet" href="css/standart/main.css">
    <link rel="stylesheet" href="css/standart/general_style.css">
    <link rel="stylesheet" href="css/standart/contact_style.css">
    <link rel="stylesheet" href="css/mobile_style/mobile-standart.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- Latest compiled and minified CSS --
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

</head>
<body>

<div class="container">

    <header class="my-header header-pages header-admin">
        <img src="<?= $apparence->imgURL_home_page;?>">
        <nav class="header-nav-bar">
            <div class="header-nav-bar-humburger">
                <div class="humburger-bar humburger-bar-first"></div>
                <div class="humburger-bar humburger-bar-sec"></div>
                <div class="humburger-bar humburger-bar-third"></div>
            </div>

            <ul class="menu-coulissant">
                <li><a href="admin.php" class="link link-nav-bar">DASHBOARD</a></li>
                <li><a href="index.php?page=home" class="link link-nav-bar">DECONNEXION</a></li>
            </ul>

            <div class="menu">
                <ul>
                    <li><a href="admin.php" class="link link-nav-bar">DASHBOARD</a></li>
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
