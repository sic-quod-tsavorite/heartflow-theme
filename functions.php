<?php

function setup_menus() {
    register_nav_menu("header-menu", __("Header Menu"));
    register_nav_menu("footer-menu", __("Footer Menu"));
}

add_action("init", "setup_menus");


function setup_resources() {
    wp_register_style ("theme-style", get_template_directory_uri() . "/style.css");
    wp_enqueue_style ("theme-style");
   
    wp_register_script ("javascript", get_template_directory_uri() . "/js.js");
    wp_enqueue_script ("javascript");

}



add_action ("wp_enqueue_scripts", "setup_resources")

?>