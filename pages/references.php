<?php

    include 'templates/partials/headers/references-header.php';
    $app = App::getInstance();
    $realisation = $app->getTable('Realisation')->findWithName('Réalisation');

    //var_dump($realisation);

    $projectTable = $app->getTable('Project');
    $projects = $projectTable->getProjectIMG();

?>

<section class="container">

    <p class="text-pres text-pres-service">
        <?= $realisation->desc_top; ?>
    </p>

    <h1 class="title-strong"><?= $realisation->titre2; ?></h1>

    <p class="text-pres"><?= $realisation->desc_bottom; ?></p>

    <?php foreach ($projects as $proj):?>

        <div class="my-element">
            <div src="" class="my-element-elem my-element-elem-left">
                <img src="<?= 'assets/background/' . $proj->img_name; ?>" class="left-elem my-img">
                <a href="<?= $proj->website_link; ?>" class="left-elem"><?= $proj->website_link; ?></a>
                <p class="left-elem">contact : <?= $proj->contact_by; ?></p>
            </div>
            <div class="my-element-elem my-element-elem-right">
                <h2><?= $proj->title; ?></h2>
                <p><?= $proj->content; ?></p>
            </div>
        </div>

    <?php endforeach;?>
</section>

<?php

    include 'templates/partials/footer/footer.php';

?>
