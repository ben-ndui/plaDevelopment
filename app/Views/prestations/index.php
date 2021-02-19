<?php include ROOT . '/app/Views/templates/partials/headers/prestation-header.php'; ?>

<div class="title-bloc">
    <p class="text-pres"><?= $page->desc_top; ?></p><br/>
    <h1 class="title-strong">Titre</h1><br/>
    <div class="title-description">
        <p class="text-pres">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
</div>
<div class="blog-card">
    <img src="<?= $page->home_img_url; ?>" alt=""/>
</div>
<div class="title-bloc">
    <h1 class="title-strong">Titre</h1><br/>
    <div class="title-description">
        <p class="text-pres">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
</div>
<div class="blog-card">
    <img src="<?= $page->home_img_url; ?>" alt=""/>
</div>

<?php include ROOT . '/app/Views/templates/partials/footer/footer.php'; ?>