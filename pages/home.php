<?php

$app = App::getInstance();

$services = $app->getTable('Services')->all();

$apparenceTable = $app->getTable('Site');
$apparence = $apparenceTable->find(1);

?>

    <?php include 'templates/partials/headers/header.php'; ?>

    <p class="text-pres text-pres-service">
        <?= $apparence->desc_top_home_page; ?>
    </p>
    <section class="container-service">
        <?php foreach ($services as $serv): ?>
            <div class="card">
                <div class="content">
                    <div class="front">
                        <div class="img" style="background-image: url(<?= $serv->imageURL; ?>);"></div>
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

    <h1 class="title-strong">Titre #1</h1>

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
                if(strlen($apparence->home_presentation) > 25 ){
                    echo substr($apparence->home_presentation, 0, 100) . "  ... <a href=''>Lire la suite</a>";
                }else{
                    echo $apparence->home_presentation;
                }
            ?></div>
    </section>

    <h1 class="title-strong">Titre #2</h1>

    <section class="container container-home-presentation">
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
            if(strlen($apparence->home_presentation) > 25 ){
                echo substr($apparence->home_presentation, 0, 100) . "  ... <a href=''>Lire la suite</a>";
            }else{
                echo $apparence->home_presentation;
            }
            ?></div>
    </section>

    <p class="text-pres text-pres-service">
        <?= $apparence->desc_bottom_home_page; ?>
    </p>

<?php include 'templates/partials/footer/footer.php'; ?>