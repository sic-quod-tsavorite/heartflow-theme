<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=" <?php bloginfo("charset") ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo("title") ?> </title>
    <?php wp_head() ?>
</head>
<body>
    

    <?php
    wp_nav_menu(array("theme_location" => "header-menu"))
    ?>
