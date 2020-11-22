<!DOCTYPE html>
<html id="top" lang="en">

<head>
    <meta charset=" <?php bloginfo("charset") ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo("title") ?> </title>
    <?php wp_head() ?>

</head>

<body>

    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
        <img id="logo" src="<?php echo get_template_directory_uri(); ?>/assets/heartflow.svg" alt="Logo" width="334.29" height="98.91" />
    </a>


    <?php
    wp_nav_menu(array("theme_location" => "header-menu"))
    ?>