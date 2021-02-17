<?php

    $app = App::getInstance();
    $servicesTable = $app->getTable('Services');
    $services = $servicesTable->all();

/**
 * Tu t'es arrêté a l'ajout de page
 */

?>
<?php include ROOT . '/pages/templates/partials/headers/admin-header.php'; ?>
<div class="container container-admin">

    <p class="btn-p">
        <a href="?page=service.add" class="button button-success">Ajouter un nouveau projet</a>
    </p>

    <?php foreach ($services as $service):?>
        <div class="my-card-container">
            <div class="top-of-my-card">
                <?= $service->title; ?>
                <span class="my-delete">
                    <form action="?page=service.delete" method="post" >
                        <input type="hidden" name="id" value="<?= $service->id; ?>">
                        <button type="submit" class="my-submit"><i class="material-icons">X</i></button>
                    </form>
                </span>

                <a href="?page=project.edit&id=<?= $service->id;?>" class="edit-btn"><i>editer</i></a>
            </div>
            <div class="card-elem card-elem-image"></div>
            <div class="card-elem card-elem-title"></div>
            <div class="card-description"><?= $service->content; ?></div>
            <div class="card-elem card-elem-action"></div>
        </div>
    <?php endforeach;?>
</div>
