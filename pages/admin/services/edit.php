<?php

use Core\HTML\Form;
$app = App::getInstance();

$serviceTable = $app->getTable('Services');
$categoryTable = $app->getTable('Category')->extractList('id', 'title');

if(!empty($_POST)){
    $result = $serviceTable->update($_GET['id'], [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'category_id' => $_POST['category_id']
        ]
    );

    if($result){
        ?>
            <div class="alert alert-succes">Sauvegarde réussi !</div>
        <?php
    }
}

$service = $serviceTable->find($_GET['id']);
$category = $app->getTable('Category')->all();

$form = new Form($service);

?>
<?php include ROOT . '/pages/templates/partials/headers/admin-header.php'; ?>

<div class="container">

    <form class="form-edit" method="post">
        <?= $form->input("title", ['type'=>'text', 'classname'=>'edit edit-title']); ?>
        <?= $form->input("content", ['type'=>'textarea', 'classname'=>'edit edit-content']); ?>
        <?= $form->select("category_id", $categoryTable); ?>
        <?= $form->submit('Sauvegarder', "edit-submit"); ?>
    </form>

</div>




