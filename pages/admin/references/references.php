<?php

use Core\HTML\Form;

include ROOT . '/pages/templates/partials/headers/references-header.php';
$app = App::getInstance();
$realisation = $app->getTable('Realisation')->findWithName('Réalisation');

/**
 * Récupération des tables en entier afin de les mettre à jour
 */
$pagesTable = $app->getTable('Page');
$site = $app->getTable('site');
$realisationTable = $app->getTable('Realisation');
$rea = $realisationTable->all();

$pages = $app->getTable('Page')->getPage('realisation');

$siteTable = $app->getTable('Page')->getPage('Site');

$projectTable = $app->getTable('Project');
$projects = $projectTable->getProjectIMG();

$form = new Form($pages);

if(!empty($_POST)){
    /*foreach($_POST['id'] as $key=>$value) {
        $post[$key]= $value;
        /*$result = $projectTable->update(
            $key,
            [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
            ]
        );*/
        /*$result = $realisationTable->update($key, [
                'titre' => $_POST['titre'],
                'titre2' => $_POST['titre2']
            ]
        );*
    }*/


    /*$result = $realisationTable->update($_POST['id'], [
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

    $result = $projectTable->update(
        $_POST['id'],
        [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'website_link' => $_POST['website_link'],
            'contact_by' => $_POST['contact_by'],
        ]
    );*/

    /*if($result){
        header('Location: /admin.php?page=reference.param');
    }*/
}

?>
<br>
<pre>
    <?php
        $post = array();
        for($i = 0; $i < count($_POST); $i++) {
            for($j = 0; $j < 5; $j++) {
                $post[$i][$j] = $_POST[$j];
            }
            /*foreach ($_POST['id'] as $key => $value) {
                $post[$i][$key] = $value;
                /*$result = $projectTable->update(
                    $key,
                    [
                        'title' => $_POST['title'],
                        'content' => $_POST['content'],
                    ]
                );*/
                /*$result = $realisationTable->update($key, [
                        'titre' => $_POST['titre'],
                        'titre2' => $_POST['titre2']
                    ]
                );
            }*/
        }
        print_r($post);
    ?>
</pre>

<form method="post" class="form-ref">
    <section class="container">

        <p class="text-pres text-pres-service">
            <input name="desc_top" value="<?= $realisation->desc_top; ?>">
        </p>

        <h1 class="title-strong"><input name="titre2" value="<?= $realisation->titre2; ?>"></h1>

        <p class="text-pres"><input name="desc_bottom" value="<?= $realisation->desc_bottom; ?>"></p>

        <?php foreach ($projects as $proj):?>
            <input type="hidden" name="id[]" value="<?= $proj->id; ?>">

            <div class="my-element">
                <div src="" class="my-element-elem my-element-elem-left">
                    <img src="<?= 'assets/background/' . $proj->img_name; ?>" class="left-elem my-img">
                    <input value="<?= $proj->website_link; ?>" name="id[]" class="left-elem">
                    <p class="left-elem">contact : <input name="id[]" value="<?= $proj->contact_by; ?>" class="left-elem"></p>
                </div>
                <div class="my-element-elem my-element-elem-right">
                    <h2><input name="id[]" value="<?= $proj->title; ?>" class="input"></h2>
                    <p><input name="id[]" value="<?= $proj->content; ?>" class="input"></p>
                </div>
            </div>

        <?php endforeach;?>
    </section>

    <?= $form->submit('ENREGISTRER', "button submit"); ?>
</form>

<?php

include ROOT . '/pages/templates/partials/footer/footer.php';

?>

