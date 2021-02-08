<?php

    $app = App::getInstance();
    $categoryTable = $app->getTable('Category');
    $categories = $categoryTable->all();

/**
 * Tu t'es arrêté a l'ajout de page
 */

?>
<?php include ROOT . '/pages/templates/partials/admin-header.php'; ?>
<div class="container container-admin">

    <p class="btn-p">
        <a href="?page=category.add" class="button button-success">Ajouter un nouveau projet</a>
    </p>

    <?php foreach ($categories as $category):?>
        <table class="rwd-table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>LIBELLE</td>
                    <td>ACTIONS</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $category->id; ?></td>
                    <td><?= $category->title; ?></td>
                    <td>
                        <a href="?page=category.edit&id=<?= $category->id;?>"><i class="material-icons button">edit</i></a>
                        <form action="?page=category.delete" method="post" style="display: inline;">
                            <input type="hidden" name="id" value="<?= $category->id; ?>">
                            <button type="submit" class="button"><i class="material-icons">delete</i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    <?php endforeach;?>
</div>
