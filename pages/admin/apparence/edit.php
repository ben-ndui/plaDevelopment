<?php

use Core\HTML\Form;
$app = App::getInstance();

$apparenceTable = $app->getTable('Site');

if(!empty($_POST)){
    $result = $apparenceTable->update($_POST['id'], [
                'title_home_page' => $_POST['title_home_page'],
                'imgURL_home_page	' => $_POST['imgURL_home_page'],
                'desc_top_home_page' => $_POST['desc_top_home_page'],
                'desc_bottom_home_page' => $_POST['desc_bottom_home_page']
        ]
    );

    if($result){
        ?>
            <div class="alert alert-succes">Sauvegarde réussi !</div>
        <?php
    }
}

$apparence = $apparenceTable->find(1);

$form = new Form($apparence);

?>
<?php include ROOT . '/pages/templates/partials/headers/admin-header.php'; ?>

<div class="container">

    <form class="form-edit" method="post">
        <input type="hidden" name="id" value="<?= $apparence->id; ?>">
        <?= $form->input("title_home_page", ['type'=>'text', 'classname'=>'edit edit-title']); ?>
        <?= $form->input("imgURL_home_page", ['type'=>'text', 'classname'=>'edit edit-title']); ?>
        <?= $form->input("desc_top_home_page", ['type'=>'text', 'classname'=>'edit edit-title']); ?>
        <?= $form->input("desc_bottom_home_page", ['type'=>'text', 'classname'=>'edit edit-title']); ?>
        <?= $form->submit('Sauvegarder', "edit-submit"); ?>
    </form>

</div>




