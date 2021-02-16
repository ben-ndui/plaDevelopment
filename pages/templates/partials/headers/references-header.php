<?php

$app = App::getInstance();

$app = App::getInstance();
$realisation = $app->getTable('Realisation')->findWithName('Réalisation');

$services = $app->getTable('Services')->all();
$service = $app->getTable('Services')->find(2);
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
    <link rel="stylesheet" href="css/standart/references.css">
</head>
<body>

<div class="container">

    <header class="my-header header-pages header-reference">
        <img src="<?= "assets/background/" . $realisation->home_img_url;?>">
        <?php include 'components/nav-widget.php'; ?>

    </header>
