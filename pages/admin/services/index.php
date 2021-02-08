<?php

    $app = App::getInstance();
    $servicesTable = $app->getTable('Services');
    $services = $servicesTable->all();

/**
 * Tu t'es arrêté a l'ajout de page
 */

?>
<?php include ROOT . '/pages/templates/partials/admin-header.php'; ?>
<div class="container container-admin">

    <p class="btn-p">
        <a href="?page=service.add" class="button button-success">Ajouter un nouveau projet</a>
    </p>

    <?php foreach ($services as $service):?>
        <?php $categoryTable = $servicesTable->findWithCategory($service->id); ?>
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
                    <td><?= $service->id; ?></td>
                    <td><?= $service->title; ?></td>
                    <td class="textarea-c"><textarea class="textarea"><?= $service->content; ?></textarea></td>
                    <td><?= $categoryTable->title; ?></td>
                    <td>
                        <a href="?page=service.edit&id=<?= $service->id;?>"><i class="material-icons button">edit</i></a>
                        <form action="?page=service.delete" method="post" style="display: inline;">
                            <input type="hidden" name="id" value="<?= $service->id; ?>">
                            <button type="submit" class="button"><i class="material-icons">delete</i></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    <?php endforeach;?>
</div>
