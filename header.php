<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head() ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white position-fixed w-100 py-4 border" style="z-index: 20;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/"><?php echo get_bloginfo("name") ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu(array(
                    'container'            => 'ul',
                    'container_class'      => 'testing',
                    'menu_class'           => 'navbar-nav ms-auto mb-2 mb-lg-0 flex gap-3',
                    'theme_location'       => 'primary_menu ',
                )) ?>
            </div>
        </div>
    </nav>