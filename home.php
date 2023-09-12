<?php get_header() ?>

<div class="container pt-3">
    <h1 class="mt-5 pt-5 fw-bold">Daftar Berita</h1>
    <hr>
    <div class="row px-3 gap-5 justify-content-center">
        <?php get_template_part("template-parts/posts") ?>
    </div>
    <div class="mt-5 d-flex justify-content-center">
        <?php get_template_part("template-parts/pagination") ?>
    </div>
</div>

<?php get_footer() ?>