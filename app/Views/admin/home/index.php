<?php include ROOT . '/app/Views/templates/partials/headers/admin-header.php'; ?>

    <form method="post">
        <input type="hidden" name="id" value="<?= $pages->id; ?>">

        <textarea name="desc_top" class="text-pres text-pres-service"><?= $pages->desc_top; ?></textarea>

        <h1 class="title-strong"><input type="text" name="titre" value="<?= $pages->titre; ?>"></h1>

        <section class="container container-home-presentation">
            <div class="home-elem home-elem-image"><img src="assets/profil_images/patrice.svg" alt="" title=""></div>
            <textarea class="home-elem home-elem-desc-all home-elem-desc-all-1"
                      name="home_presentation"><?= $siteTable->home_presentation; ?></textarea>
            <textarea class="home-elem home-elem-desc-all home-elem-desc-all-2"
                      name="home_presentation_2"><?= $siteTable->home_presentation_2; ?></textarea>
        </section>

        <h1 class="title-strong"><input type="text" name="titre2" value="<?= $pages->titre2; ?>"></h1>

        <section class="container container-home-presentation">
            <textarea class="home-elem home-elem-desc-all home-elem-desc-all-1"
                      name="desc_bottom"><?= $pages->desc_top; ?></textarea>
            <textarea class="home-elem home-elem-desc-all home-elem-desc-all-2"
                      name="desc_bottom"><?= $pages->desc_bottom; ?></textarea>
        </section>

        <textarea class="text-pres text-pres-service" name="desc_bottom"><?= $pages->desc_bottom; ?></textarea>

        <?= $form->submit('ENREGISTRER', "button submit"); ?>

    </form>

<?php include ROOT . '/app/Views/templates/partials/footer/footer.php'; ?>