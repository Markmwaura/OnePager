<?php

//varibles - setup
add_theme_support("menus");
add_theme_support("post_thumbnails");
add_theme_support ('title-tag');


//includes
include(get_template_directory().'/includes/front/enqueue.php');

//Action & Filter hooks
add_action('wp_enqueue_scripts','onepage_enqueue');

//shortcodes



?>
