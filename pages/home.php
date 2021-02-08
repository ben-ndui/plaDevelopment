<?php

$app = App::getInstance();

$services = $app->getTable('Services')->all();

?>

    <?php include 'templates/partials/header.php'; ?>

    <p class="text-pres text-pres-service">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
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
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
    </p>