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
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- Latest compiled and minified CSS --
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

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
