<?php include ROOT . '/app/Views/templates/partials/headers/admin-header.php'; ?>

<div class="container container-admin">

    <p class="btn-p">
        <a href="?page=admin.project.add" class="button button-success">Ajouter un nouveau projet</a>
    </p>

    <?php foreach ($projects as $proj):?>
        <div class="my-card-container">
            <div class="top-of-my-card">
                <?= $proj->title; ?>
                <span class="my-delete">
                    <form action="?page=admin.project.delete" method="post" >
                        <input type="hidden" name="id" value="<?= $proj->id; ?>">
                        <button type="submit" class="my-submit"><i class="material-icons">X</i></button>
                    </form>
                </span>

                <a href="?page=admin.project.edit&id=<?= $proj->id;?>" class="edit-btn"><i>editer</i></a>
            </div>
            <div class="card-elem card-elem-image"></div>
            <div class="card-elem card-elem-title"></div>
            <div class="card-description"><?= $proj->content; ?></div>
            <div class="card-elem card-elem-action"></div>
        </div>
    <?php endforeach;?>
</div>
