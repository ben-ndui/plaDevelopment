<?php


if(!empty($_POST)){
    $auth = new \Core\Auth\DbAuth(App::getInstance()->getDb());
    if($auth->login($_POST['identifiant'], $_POST['password'])){
        $_SESSION['sname'] = $_POST['identifiant'];
        header('Location: index.php?page=admin.dashboard.index');
    }else{
        ?>

        <div class="alert alert-danger">
            Identifiant Incorrect !
        </div>

        <?php
    }
}


use Core\HTML\Form;

$form = new Form($_POST);

?>
    <?php include ROOT . '/app/Views/templates/partials/headers/connexion-header.php'; ?>

    <div class="container container-connexion">
        <form class="form" method="post">
            <?= $form->input("identifiant", ['password'=>'text', 'classname'=>'input input-id', 'plholder'=>'Identifiant']); ?>
            <?= $form->input("password", ['type'=>'password', 'classname'=>'input input-pwd', 'plholder'=>'********']); ?>
            <?= $form->submit('Me connecter', "input input-submit"); ?>
        </form>
    </div>


