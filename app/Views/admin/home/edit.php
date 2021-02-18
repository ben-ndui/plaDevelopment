<?php include ROOT . '/app/Views/templates/partials/headers/admin-header.php'; ?>

<div class="container">

    <form class="form-edit" method="post">
        <?= $form->input("title", ['type'=>'text', 'classname'=>'edit edit-title']); ?>
        <?= $form->input("content", ['type'=>'textarea', 'classname'=>'edit edit-content']); ?>
        <?= $form->submit('Sauvegarder', "submit"); ?>
    </form>

</div>





