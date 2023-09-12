<?php get_header() ?>

<div class="pt-5 container">
    <h1 class="mt-5 pt-3 pb-2 fw-bold">
        <?php the_title() ?>
    </h1>
    <div>
        <span><?php the_date() ?></span>
    </div>
    <hr>
    <img src="<?php echo the_post_thumbnail_url() ?>" alt="" class="w-100 h-70 object-fit-cover py-4 px-5">
    <hr>
    <div style="text-align: justify;">
        <?php the_content() ?>
    </div>
    <hr>
    <div>
        <h3 class="text-left">Comments</h3>
        <div class="d-flex flex-column gap-4 align-items-left w-100">
            <?php
            $comment_query = new WP_Comment_Query();
            $comments = $comment_query->query(array(
                "post_id" => get_the_ID(),
                "status" => 'approve'
            ));
            ?>
            <?php foreach ($comments as $comment) : ?>
                <div class="card p-3">
                    <div class="d-flex gap-3">
                        <div style="width: 60px;height: 60px;" class="rounded-circle overflow-hidden">
                            <?php echo get_avatar($comment, 60) ?>
                        </div>
                        <div>
                            <span><?php echo get_comment_author() ?></span>
                            <p><?php comment_text() ?></p>
                            <div class="d-flex">
                                <?php edit_comment_link("Edit") ?>
                                <?php echo get_comment_reply_link() ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <hr>
        <div>
            <?php
            $form = comment_form(array(
                "title_reply_before" => "<h3 id='reply-title' class='text-center py-5'>",
                "title_reply_after" => "</h3>",
                "class_submit" => "btn btn-primary mt-3",
                "logged_in_as" => "",
                "comment_field" => "<textarea id='comment' class='w-100' name='comment' cols='45' rows='8' maxlegth='65525' required='required'></textarea>"
            ))
            ?>
        </div>
    </div>
</div>

<?php get_footer() ?>