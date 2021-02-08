<?php

use Core\HTML\Form;
$app = App::getInstance();

$usersTable = $app->getTable('User');

if(!empty($_POST)){
    $result = $usersTable->update($_POST['id'], [
                'username' => $_POST['username'],
                'lastname' => $_POST['lastname'],
                'password' => sha1($_POST['password'])
        ]
    );

    header('Location: ?page=profil.edit');
}

$user = $usersTable->findWithName($_SESSION['sname']);
//var_dump('ID = ' . $user->id);

$form = new Form($user);

?>
<?php include ROOT . '/pages/templates/partials/admin-header.php'; ?>

<div class="container">

    <form class="form-edit" method="post">
        <input type="hidden" name="id" value="<?= $user->id; ?>">
        <?= $form->input("username", ['type'=>'text', 'classname'=>'edit edit-title']); ?>
        <?= $form->input("lastname", ['type'=>'text', 'classname'=>'edit edit-title']); ?>
        <?= $form->input("password", ['type'=>'password', 'classname'=>'edit edit-title']); ?>
        <?= $form->submit('Sauvegarder', "edit-submit"); ?>
    </form>

</div>




