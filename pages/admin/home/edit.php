<?php

use Core\HTML\Form;
$app = App::getInstance();

$projectTable = $app->getTable('Project');

if(!empty($_POST)){
    $result = $projectTable->update($_GET['id'], [
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

$project = $projectTable->find($_GET['id']);

$form = new Form($project);

?>
<?php include ROOT . '/pages/templates/partials/headers/admin-header.php'; ?>

<div class="container">

    <form class="form-edit" method="post">
        <?= $form->input("title", ['type'=>'text', 'classname'=>'edit edit-title']); ?>
        <?= $form->input("content", ['type'=>'textarea', 'classname'=>'edit edit-content']); ?>
        <?= $form->submit('Sauvegarder', "submit"); ?>
    </form>

</div>





