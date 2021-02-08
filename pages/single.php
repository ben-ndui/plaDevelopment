<?php


    $project = ProjectTable::find($_GET['id']);
    $allProjects = ProjectTable::getAll();

    if($project === false){
        App::notFound();
    }

    App::setTitle($project->title);

    $category = CategoryTable::find($project->id);
?>

    <h2><?= $project->title; ?></h2>
    <p><em><?= $category->title; ?></em></p>
    <p><?= $project->content; ?></p>

    <ul>
        <?php foreach ($allProjects as $proj): ?>
            <li>
                <a href="<?= $proj->url; ?>"><?=$proj->title;?></a>
            </li>
            <?= $proj->extrait;?>
        <?php endforeach; ?>
    </ul>





