<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav id="main-nav">
            <div class="container">
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </div>

        </nav>
    </header>