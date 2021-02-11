<?php

    $app = App::getInstance();
    $categoryTable = $app->getTable('Category');
    $categories = $categoryTable->all();

/**
 * Tu t'es arrêté a l'ajout de page
 */

?>
<?php include ROOT . '/pages/templates/partials/headers/admin-header.php'; ?>
<div class="container container-admin">

    <p class="btn-p">
        <a href="?page=category.add" class="button button-success">Ajouter un nouveau projet</a>
    </p>

    <?php foreach ($categories as $category):?>
        <div class="my-card-container">
            <div class="top-of-my-card">
                <?= $category->title; ?>
                <span class="my-delete">
                    <form action="?page=category.delete" method="post" >
                        <input type="hidden" name="id" value="<?= $category->id; ?>">
                        <button type="submit" class="my-submit"><i class="material-icons">X</i></button>
                    </form>
                </span>

                <a href="?page=category.edit&id=<?= $category->id;?>" class="edit-btn"><i>editer</i></a>
            </div>
            <div class="card-elem card-elem-image"></div>
            <div class="card-elem card-elem-title"></div>
            <div class="card-description"><?= $category->content; ?></div>
            <div class="card-elem card-elem-action"></div>
        </div>
    <?php endforeach;?>
</div>
