<?php

//setup
define('JU_DEV_MODE' , true);

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/setup.php'));

//Hooks
add_action('wp_enqueue_scripts', 'ju_enqueue');
//for menu
add_action('after_setup_theme', 'ju_setup_theme');
//
add_action('customize_register', 'business_customize_register');


//Shortcodes

 