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
$artContactTable = $app->getTable('Article_contact');
$rea = $realisationTable->all();

$pages = $app->getTable('Page')->getPage('realisation');

$siteTable = $app->getTable('Page')->getPage('Site');

$projectTable = $app->getTable('Project');
$projects = $projectTable->getProjectIMG();

$form = new Form($pages);

if(!empty($_POST)){
    $res = save($_POST['id'], "title", "content", '',$projectTable);
    $res = save($_POST['realisation'], 'contenu','titre', 'titre2',$realisationTable, true);
    $res = save($_POST['realisation'], 'contenu','titre', 'titre2', $artContactTable);// IL TE RESTE CELUI LA A FAIRE

    if($res){
        header('Location: admin.php?page=reference.param');
    }

}

function save($postTable, $field1, $field2, $field3, $uneTable, $real = false){
    $post = Array();
    foreach($postTable as $key=>$value) {
        $post[$key] = $value;
    }
    $tab[][] = Array();
    $i = 1;
    $j = 0;
    $l = 0;
    foreach($post as $p) {
        $tab[$i][$j] = $p;
        $j++;
        $l++;
        if ($l == 5) {
            $i++;
            $j = 0;
            $l = 0;
        }
    }
    for ($i = 1; $i < count($tab); $i++){
        switch ($real){
            case false:
                $uneTable->update(
                    $i,
                    [
                        $field1 => $tab[$i][3],
                        $field2 => $tab[$i][4],
                    ]
                );
                break;
            case true:
                $uneTable->update(
                    $i,
                    [
                        $field1 => $tab[$i][0],
                        $field2 => $tab[$i][1],
                        $field3 => $tab[$i][2],
                    ]
                );
                break;
        }

    }
    return true;
}

?>
<br>

<form method="post" class="form-ref">
    <section class="container">

        <p class="text-pres text-pres-service">
            <input name="realisation[]" value="<?= $realisation->contenu; ?>">
        </p>

        <h1 class="title-strong"><input name="realisation[]" value="<?= $realisation->titre; ?>"></h1>

        <p class="text-pres"><input name="realisation[]" value="<?= $realisation->titre2; ?>"></p>

        <?php foreach ($projects as $proj):?>
            <input type="hidden" name="id[]" value="<?= $proj->id; ?>">
            <input type="hidden" name="realisation[]" value="<?= $proj->id; ?>">

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

