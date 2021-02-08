<?php

$app = App::getInstance();

$services = $app->getTable('Services')->all();

$apparenceTable = $app->getTable('Site');
$apparence = $apparenceTable->find(1);

?>

    <?php include 'templates/partials/header.php'; ?>

    <p class="text-pres text-pres-service">
        <?= $apparence->desc_top_home_page; ?>
    </p>
    <div class="container-service">
        <?php foreach ($services as $serv): ?>
            <a href="<?=$serv->url;?>">
                <div class="card">
                    <div class="content">
                        <div class="front">
                            <div class="img"></div>
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
            </a>
        <?php endforeach;?>
    </div>

    <p class="text-pres text-pres-service">
        <?= $apparence->desc_bottom_home_page; ?>
    </p>