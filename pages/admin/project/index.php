<?php

    $app = App::getInstance();
    $projectTable = $app->getTable('Project');
    $projects = $projectTable->all();

/**
 * Tu t'es arrêté a l'ajout de page
 */

?>
<?php include ROOT . '/pages/templates/partials/admin-header.php'; ?>
<div class="container container-admin">

    <p class="btn-p">
        <a href="?page=project.add" class="button button-success">Ajouter un nouveau projet</a>
    </p>

    <?php foreach ($projects as $proj):?>
        <?php $categoryTable = $projectTable->findWithCategory($proj->id); ?>
        <table class="rwd-table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>TITRE PROJET</td>
                    <td>CONTENU</td>
                    <td>CATEGORIE</td>
                    <td>ACTIONS</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $proj->id; ?></td>
                    <td><?= $proj->title; ?></td>
                    <td class="textarea-c"><textarea class="textarea"><?= $proj->content; ?></textarea></td>
                    <td><?= $categoryTable->title; ?></td>
                    <td>
                        <a href="?page=project.edit&id=<?= $proj->id;?>"><i class="material-icons button">edit</i></a>
                        <form action="?page=project.delete" method="post" style="display: inline;">
                            <input type="hidden" name="id" value="<?= $proj->id; ?>">
                            <button type="submit" class="button"><i class="material-icons">delete</i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    <?php endforeach;?>
</div>
