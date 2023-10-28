<?php

// function enqueue_theme_assets() {
//     // Enqueue jQuery
//     wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/scripts/jquery.min.js', array(), null, true);

//     // Enqueue Bootstrap CSS
//     wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/scripts/bootstrap/css/bootstrap.css', array(), null);

//     // Enqueue your custom script
//     wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/scripts/script.js', array('jquery'), null, true);

//     // Enqueue your other styles
//     wp_enqueue_style('style', get_template_directory_uri() . '/assets/style.css', array(), null);
//     wp_enqueue_style('content-box', get_template_directory_uri() . '/assets/css/content-box.css', array(), null);
//     wp_enqueue_style('image-box', get_template_directory_uri() . '/assets/css/image-box.css', array(), null);
//     wp_enqueue_style('animations', get_template_directory_uri() . '/assets/css/animations.css', array(), null);
//     wp_enqueue_style('components', get_template_directory_uri() . '/assets/css/components.css', array(), null);
//     wp_enqueue_style('flexslider', get_template_directory_uri() . '/assets/scripts/flexslider/flexslider.css', array(), null);
//     wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/scripts/magnific-popup.css', array(), null);
//     wp_enqueue_style('contact-form', get_template_directory_uri() . '/assets/scripts/php/contact-form.css', array(), null);
//     wp_enqueue_style('social-stream', get_template_directory_uri() . '/assets/scripts/social.stream.css', array(), null);

//     // Enqueue the favicon
//     // wp_enqueue_style('favicon', get_template_directory_uri() . '/assets/images/favicon.png', array(), null);

//     // Enqueue your skin.css
//     wp_enqueue_style('skin', get_template_directory_uri() . '/assets/skin.css', array(), null);
// }

// add_action('wp_enqueue_scripts', 'enqueue_theme_assets');



// function enqueue_custom_scripts_and_styles() {
//     // Enqueue Line Icons CSS
//     wp_enqueue_style('line-icons', get_template_directory_uri() . '/assets/scripts/iconsmind/line-icons.min.css');

//     // Enqueue Bootstrap JavaScript
//     wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/scripts/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);

//     // Enqueue other scripts and styles similarly
//     wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/scripts/imagesloaded.min.js', array(), null, true);
//     wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/scripts/parallax.min.js', array(), null, true);
//     wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/scripts/flexslider/jquery.flexslider-min.js', array(), null, true);
//     wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/scripts/isotope.min.js', array(), null, true);
//     wp_enqueue_script('contact-form', get_template_directory_uri() . '/assets/scripts/php/contact-form.js', array('jquery'), null, true);
//     wp_enqueue_script('progress-counter', get_template_directory_uri() . '/assets/scripts/jquery.progress-counter.js', array('jquery'), null, true);
//     wp_enqueue_script('tab-accordion', get_template_directory_uri() . '/assets/scripts/jquery.tab-accordion.js', array('jquery'), null, true);
//     wp_enqueue_script('bootstrap-popover', get_template_directory_uri() . '/assets/scripts/bootstrap/js/bootstrap.popover.min.js', array('jquery'), null, true);
//     wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/scripts/jquery.magnific-popup.min.js', array('jquery'), null, true);
//     wp_enqueue_script('social-stream', get_template_directory_uri() . '/assets/scripts/social.stream.min.js', array('jquery'), null, true);
//     wp_enqueue_script('slimscroll', get_template_directory_uri() . '/assets/scripts/jquery.slimscroll.min.js', array('jquery'), null, true);
//     wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/assets/scripts/smooth.scroll.min.js', array('jquery'), null, true);
// }

// add_action('wp_enqueue_scripts', 'enqueue_custom_scripts_and_styles');


function enqueue_custom_scripts_and_styles_elon1()
{
    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/scripts/bootstrap/css/bootstrap.css');

    // Enqueue your custom scripts
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/scripts/script.js');

    // Enqueue your custom styles
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/style.css');
    wp_enqueue_style('content-box-style', get_template_directory_uri() . '/assets/css/content-box.css');
    wp_enqueue_style('image-box-style', get_template_directory_uri() . '/assets/css/image-box.css');
    wp_enqueue_style('animations-style', get_template_directory_uri() . '/assets/css/animations.css');
    wp_enqueue_style('components-style', get_template_directory_uri() . '/assets/css/components.css');
    wp_enqueue_style('flexslider-style', get_template_directory_uri() . '/assets/scripts/flexslider/flexslider.css');
    wp_enqueue_style('magnific-popup-style', get_template_directory_uri() . '/assets/scripts/magnific-popup.css');
    wp_enqueue_style('contact-form-style', get_template_directory_uri() . '/assets/scripts/php/contact-form.css');
    wp_enqueue_style('social-stream-style', get_template_directory_uri() . '/assets/scripts/social.stream.css');

    // Enqueue favicon
    wp_enqueue_style('favicon', get_template_directory_uri() . '/assets/images/favicon.png');

    // Enqueue your skin CSS
    wp_enqueue_style('skin-style', get_template_directory_uri() . '/assets/skin.css');
}

// Hook the function to the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts_and_styles_elon1');




function enqueue_custom_scripts_and_styles_elon2()
{
    // Enqueue styles
    wp_enqueue_style('line-icons', get_template_directory_uri() . '/assets/scripts/iconsmind/line-icons.min.css');

    // Enqueue scripts
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/scripts/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/scripts/imagesloaded.min.js', array('jquery'), null, true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/scripts/parallax.min.js', array('jquery'), null, true);
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/scripts/flexslider/jquery.flexslider-min.js', array('jquery'), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/scripts/isotope.min.js', array('jquery'), null, true);
    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?sensor=false', array(), null, true);
    wp_enqueue_script('contact-form', get_template_directory_uri() . '/assets/scripts/php/contact-form.js', array('jquery'), null, true);
    wp_enqueue_script('progress-counter', get_template_directory_uri() . '/assets/scripts/jquery.progress-counter.js', array('jquery'), null, true);
    wp_enqueue_script('tab-accordion', get_template_directory_uri() . '/assets/scripts/jquery.tab-accordion.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-popover', get_template_directory_uri() . '/assets/scripts/bootstrap/js/bootstrap.popover.min.js', array('jquery'), null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/scripts/jquery.magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('social-stream', get_template_directory_uri() . '/assets/scripts/social.stream.min.js', array('jquery'), null, true);
    wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/assets/scripts/smooth.scroll.min.js', array('jquery'), null, true);

    wp_enqueue_script('main_script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts_and_styles_elon2');
