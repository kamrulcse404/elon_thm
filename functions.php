<?php

/* --------------Post Thumbnails Add-------------- */

add_theme_support('post-thumbnails');
set_post_thumbnail_size(600, 337, true);
add_image_size('single-thumbnail', 600, 337, true);

// include title & js_css  
add_theme_support('title-tag');
require_once('enqueue/enqueue_css_js.php');


// redux Framework //
require_once('lib/framework/ReduxCore/framework.php');
require_once('lib/framework/sample/config.php');

//cmb2
require_once('metabox/init.php');
require_once('metabox/functions.php');

// header menus 
function register_header_menu()
{
    register_nav_menus(
        array(
            'header_menu' => __('Header Menu', 'elon')
        )
    );
}
add_action('after_setup_theme', 'register_header_menu');



// database 
require_once('functions/database.php');


// ajax call 
require_once('functions/ajax_actions.php');

// custom functions 
require_once('functions/custom-post-type.php');



// mailTrap 
// function mailtrap($phpmailer)
// {
//     $phpmailer->isSMTP();
//     $phpmailer->Host = 'smtp.mailtrap.io';
//     $phpmailer->SMTPAuth = true;
//     $phpmailer->Port = 2525;
//     $phpmailer->Username = 'dd723a540dede2';
//     $phpmailer->Password = '8eb1242054fc0a';
// }

// add_action('phpmailer_init', 'mailtrap');




