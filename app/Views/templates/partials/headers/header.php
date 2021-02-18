<?php

    $app = App::getInstance();

    $app->title = "ADMINISTRATION PLA";

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
    <link rel="stylesheet" href="css/standart/general_style.css">
    <link rel="stylesheet" href="css/mobile_style/mobile-standart.css">
</head>
<body>

<div class="container">

    <header class="my-header">
        <img src="<?= $apparence->imgURL_home_page;?>">

        <?php include 'components/nav-widget.php'; ?>

        <div class="logo-and-title">
            <h1 class="link">
                LA <span class="surbrillance">PERFORMANCE</span>
                PAR <span class="surbrillance">L'EFFICACITE</span> DES <span class="surbrillance">PROCESSUS</span>
            </h1>
        </div>

    </header>
