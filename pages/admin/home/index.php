<?php

use Core\HTML\Form;

$app = App::getInstance();

$pages = $app->getTable('Page')->getPage('Home');
$lesTitres = $app->getTable('Titre');

/**
 * Récupération des tables en entier afin de les mettre à jour
 */
$pagesTable = $app->getTable('Page');
$homeTable = $app->getTable('Home');
$site = $app->getTable('site');

$siteTable = $app->getTable('Page')->getPage('Site');

$form = new Form($pages);

if(!empty($_POST)){
    $result = $homeTable->update($_POST['id'], [
            'titre' => $_POST['titre'],
            'titre2' => $_POST['titre2']
        ]
    );

    $result = $pagesTable->update(
            $_POST['id'],
            [
                'desc_top' => $_POST['desc_top'],
                'desc_bottom' => $_POST['desc_bottom'],
            ]
    );


    $result = $site->update(
            $_POST['id'],
            [
                    'home_presentation' => $_POST['home_presentation'],
                    'home_presentation_2' => $_POST['home_presentation_2']
            ]
    );

    if($result){
        header('Location: /admin.php?page=home.param');
    }
}

?>

<?php include ROOT . '/pages/templates/partials/headers/admin-header.php'; ?>

<form method="post">
    <input type="hidden" name="id" value="<?= $pages->id; ?>">

    <textarea name="desc_top" class="text-pres text-pres-service"><?= $pages->desc_top; ?></textarea>

    <h1 class="title-strong"><input type="text" name="titre" value="<?= $pages->titre; ?>"></h1>

    <section class="container container-home-presentation">
        <div class="home-elem home-elem-image"><img src="assets/profil_images/patrice.svg" alt="" title=""></div>
        <textarea class="home-elem home-elem-desc-all home-elem-desc-all-1" name="home_presentation"><?= $siteTable->home_presentation; ?></textarea>
        <textarea class="home-elem home-elem-desc-all home-elem-desc-all-2" name="home_presentation_2"><?= $siteTable->home_presentation_2;?></textarea>
    </section>

    <h1 class="title-strong"><input type="text" name="titre2" value="<?= $pages->titre2; ?>"></h1>

    <section class="container container-home-presentation">
        <textarea class="home-elem home-elem-desc-all home-elem-desc-all-1" name="desc_bottom"><?= $pages->desc_top ;?></textarea>
        <textarea class="home-elem home-elem-desc-all home-elem-desc-all-2" name="desc_bottom"><?= $pages->desc_bottom ;?></textarea>
    </section>

    <textarea class="text-pres text-pres-service" name="desc_bottom"><?= $pages->desc_bottom; ?></textarea>

    <?= $form->submit('ENREGISTRER', "button submit"); ?>

</form>

<?php include ROOT . '/pages/templates/partials/footer/footer.php'; ?>