<?php

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
        <link rel="stylesheet" href="css/standart/main.css">
        <link rel="stylesheet" href="css/standart/general_style.css">
        <link rel="stylesheet" href="css/standart/contact_style.css">
        <link rel="stylesheet" href="css/mobile_style/mobile-standart.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- Latest compiled and minified CSS --
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

    </head>
    <body>
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
        <div class="container">

            <?= $content; ?>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
    </body>
</html>