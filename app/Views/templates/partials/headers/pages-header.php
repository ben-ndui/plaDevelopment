<?php

    $app = App::getInstance();

    $services = $app->getTable('Services')->all();
    $service = $app->getTable('Services')->find($_GET['id']);
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
</head>
<body>

<div class="container">

<header class="my-header header-pages">
    <img src="<?= $apparence->imgURL_home_page;?>">
    <?php include 'components/nav-widget.php'; ?>

    <div class="logo-and-title">
        <h1>
            <?= $service->title ;?>
        </h1>
    </div>

</header>
