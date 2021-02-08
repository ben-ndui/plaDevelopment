<?php

use Core\HTML\Form;
$app = App::getInstance();

$categoryTable = $app->getTable('Category');

if(!empty($_POST)){
    $result = $categoryTable->update($_GET['id'], [
                'title' => $_POST['title']
        ]
    );

    if($result){
        ?>
            <div class="alert alert-succes">Sauvegarde réussi !</div>
        <?php
    }
}

$category = $categoryTable->find($_GET['id']);

$form = new Form($category);

?>
<?php include ROOT . '/pages/templates/partials/admin-header.php'; ?>

<div class="container">

    <form class="form-edit" method="post">
        <?= $form->input("title", ['type'=>'text', 'classname'=>'edit edit-title']); ?>
        <?= $form->submit('Sauvegarder', "edit-submit"); ?>
    </form>

</div>




