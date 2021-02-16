<?php

$app = App::getInstance();

$home = $app->getTable('Page')->getPage('home');
$services = $app->getTable('Services')->all();
$project = $app->getTable('Project')->all();

//var_dump($services);

$apparenceTable = $app->getTable('Site');
$apparence = $apparenceTable->find(1);

?>

    <?php include 'templates/partials/headers/header.php'; ?>

    <p class="text-pres text-pres-service">
        <?= $home->desc_top; ?>
    </p>

    <!-----------------------------------
        SECTION CONTENANT LES SERVICES
    ------------------------------------->

    <h1 class="title-strong"><?= $home->titre; ?></h1>

    <p class="text-pres text-pres-service">
        <?= $home->desc_titre1; ?>
    </p>

    <section class="container-service">
        <?php foreach ($services as $serv): ?>
            <div class="card">
                <div class="content">
                    <div class="front">
                        <div class="img" style="background-image: url(<?= 'assets/background/' . $serv->imageURL; ?>);"></div>
                        <h3><?=$serv->title;?></h3>
                    </div>
                    <div class="back">
                        <h3><?=$serv->title;?></h3>
                        <p>
                            <?php
                                if(strlen($serv->content) > 25 ){
                                    echo substr($serv->content, 0, 50) . "...";
                                }else{
                                    echo $serv->content;
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </section>

    <!-------------------------------------------------
        SECTION CONTENANT LES DEUX CARTES PRESTATION
    --------------------------------------------------->

    <h1 class="title-strong"><?= $home->titre2; ?></h1>

    <p class="text-pres text-pres-service">
        <?= $home->desc_titre2; ?>
    </p>

    <section class="container container-home-presentation">
        <div class="home-elem home-elem-desc-all home-elem-desc-all-1">
            <?php
            if(strlen($home->desc_bottom) > 25 ){
                echo substr($home->desc_bottom, 0, 100) . "  ... <a href=''>Lire la suite</a>";
            }else{
                echo "<a href=''>" . $home->desc_bottom . "</a>";
            }
            ?>
        </div>
        <div class="home-elem home-elem-desc-all home-elem-desc-all-2">
            <?php
            if(strlen($home->desc_bottom) > 25 ){
                echo substr($home->desc_bottom, 0, 100) . "  ... <a href=''>Lire la suite</a>";
            }else{
                echo $home->desc_bottom;
            }
            ?></div>
    </section>

    <!-----------------------------------------------------------
        SECTION CONTENANT LES DEUX LA PRESENTATION DE MONSIEUR
    ------------------------------------------------------------->

    <h1 class="title-strong"><?= $home->titre3; ?></h1>

    <p class="text-pres text-pres-service">
        <?= $home->desc_titre3; ?>
    </p>

    <section class="container container-home-presentation">
        <div class="home-elem home-elem-image"><img src="assets/profil_images/patrice.svg" alt="" title=""></div>
        <div class="home-elem home-elem-desc-all home-elem-desc-all-1">
            <?php
                if(strlen($apparence->home_presentation) > 25 ){
                    echo substr($apparence->home_presentation, 0, 100) . "  ... <a href=''>Lire la suite</a>";
                }else{
                    echo "<a href=''>" . $apparence->home_presentation . "</a>";
                }
            ?>
        </div>
        <div class="home-elem home-elem-desc-all home-elem-desc-all-2">
            <?php
                if(strlen($apparence->home_presentation_2) > 25 ){
                    echo substr($apparence->home_presentation_2, 0, 100) . "  ... <a href=''>Lire la suite</a>";
                }else{
                    echo $apparence->home_presentation_2;
                }
            ?></div>
    </section>

    <p class="text-pres text-pres-service">
        <?= $home->desc_bottom; ?>
    </p>

<?php include 'templates/partials/footer/footer.php'; ?>