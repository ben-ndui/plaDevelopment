<?php

use Core\HTML\Form;
$app = App::getInstance();

$projectTable = $app->getTable('Project');
$categoryTable = $app->getTable('Category')->extractList('id', 'title');

if(!empty($_POST)){
    $result = $projectTable->create(
            [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'category_id' => $_POST['category_id']
            ]
    );

    /**
     * Une fois que l'ajout a été fait, l'utilisateur est redirigé vers la page d'édition que tu peux changer si tu veux
     */
    if($result){
        header('Location: admin.php?page=project.edit&id='. $app->getDb()->lastInsertId());
    }
}
$category = $app->getTable('Category')->all();

$form = new Form($_POST);

?>
<?php include ROOT . '/pages/templates/partials/admin-header.php'; ?>

<div class="container container-add">

    <form class="form-edit" method="post">
        <?= $form->input("title", ['type'=>'text', 'classname'=>'edit edit-title']); ?>
        <?= $form->input("content", ['type'=>'textarea', 'classname'=>'edit edit-content']); ?>
        <?= $form->select("category_id", $categoryTable); ?>
        <?= $form->submit('Sauvegarder', "submit"); ?>
    </form>

</div>
