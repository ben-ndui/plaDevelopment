<?php

    /************************************
     * IMPORTATION DES CLASSE UTILISEES *
     ************************************/

    $app = App::getInstance();
    $servicesTable = $app->getTable('Services');
    $projectsTable = $app->getTable('Project');

    $project = $projectsTable->find($_GET['id']);
    $allproject = $projectsTable->all();
    $service = $servicesTable->find($_GET['id']);
    $services = $servicesTable->all();

    $app->title = "Mes services";

    if($project === false){
        App::notFound();
    }

    if($service === false){
        App::notFound();
    }

?>

<?php if ($service->title === "Focalisons sur le résultat"):?>

    <?= include 'templates/partials/pages-header.php';?>

    <p class="text-pres text-pres-service">
        <?= $service->content; ?>
    </p>

    <div class="container container-service-type-one">
        <section class="section section-left">
            <ul>
                <?php foreach ($allproject as $proj): ?>
                    <li>
                        <a href="<?=$proj->url ?>"><?=$proj->title;?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section class="section section-right"></section>
    </div>

<?php endif;?>

    <h1><?= $service->title; ?></h1>
    <p>
        <?= $service->content; ?>
    </p>

