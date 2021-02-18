<?php include ROOT . '/app/Views/templates/partials/headers/references-header.php'; ?>
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

include ROOT . '/app/Views/templates/partials/footer/footer.php';

?>

