<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header id="main-header">
        <div class="container">
            <h1>
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <p><?php bloginfo('description') ?></p>
            <ul>
                <li><a href="">Educational</a></li>
                <li><a href="">Children</a></li>
                <li><a href="">Programming</a></li>
                <li><a href="">Novels</a></li>
            </ul>
        </div>
    </header>