<?php if (have_posts()) {
    while (have_posts()) {
        the_post() ?>
        <div class="card col-3 px-0" style="width: 20rem;">
            <a href="<?php the_permalink() ?>" class="text-decoration-none text-black">
                <div style="width: 20rem;height: 13rem;" class="overflow-hidden">
                    <img src="<?php echo the_post_thumbnail_url() ?>" class="card-img-top" alt="...">
                </div>
                <div class="card-body d-flex flex-column justify-content-between">
                    <h4 class="fw-bold" style="font-size: 1rem;"><?php the_title() ?></h4>
                    <div class="d-flex flex-column">
                        <span style="font-size: 0.8rem;" class="text-primary"><?php the_author() ?></span>
                        <span><?php echo get_the_date() ?></span>
                    </div>
                </div>
            </a>
        </div>
<?php }
} ?>