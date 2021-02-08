<?php

use Core\HTML\Form;
$app = App::getInstance();

$categoryTable = $app->getTable('Category');

if(!empty($_POST)){
    $result = $categoryTable->create(
            [
                'title' => $_POST['title']
            ]
    );

    /**
     * Une fois que l'ajout a été fait, l'utilisateur est redirigé vers la page d'édition que tu peux changer si tu veux
     */
    if($result){
        header('Location: admin.php?page=category.edit&id='. $app->getDb()->lastInsertId());
    }
}
$category = $app->getTable('Category')->all();

$form = new Form($_POST);

?>
<?php include ROOT . '/pages/templates/partials/admin-header.php'; ?>

<div class="container">

    <form class="form-edit" method="post">
        <?= $form->input("title", ['type'=>'text', 'classname'=>'edit edit-title']); ?>
        <?= $form->submit('Ajouter', "edit-submit"); ?>
    </form>

</div>




