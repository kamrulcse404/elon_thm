<?php

// metabox for about header background
function metabox_for_about_header_section(array $about_header_section)
{
    $about_header_section[] = array(
        'id' => 'about-page-header-section',
        'title' => 'About Header  Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'about.php',
        ),
        'fields' => array(
            array(
                'id' => 'about-header-background',
                'name' => 'Upload About Header Background',
                'default' => get_template_directory_uri() . '/assets/images/long-2.jpg',
                'type' => 'file',
            ),

            array(
                'id' => 'about-header-title',
                'name' => 'Title',
                'default' => 'About us one',
                'type' => 'text',
            ),

            array(
                'id' => 'about-header-desc',
                'name' => 'Description',
                'default' => 'Out know-how and experience has been out main value',
                'type' => 'wysiwyg',
            ),
        ),
    );

    return $about_header_section;
}

add_filter('cmb2_meta_boxes', 'metabox_for_about_header_section');


// metabox for about proporzional
function metabox_for_about_proporzional_section(array $about_proporzional_section)
{
    $about_proporzional_section[] = array(
        'id' => 'about-page-proporzional-section',
        'title' => 'About Proporzional  Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'about.php',
        ),
        'fields' => array(

            array(
                'id' => 'about-proporzional-desc',
                'name' => 'Description',
                'default' => 'Lorem ipsum dolor sitamet, consectetur adipisicing elit, sed do eiusmod tempor incididunt erat veritatis excepturi odio mattis non! Maxime quod etiam deserunt.
                ucimus eleifend lacinia cumque, optio, adipisci placerat.
                ut labore et dolore magna aliqua. Lorem ipsum dolor sitamet, consectetur adipisicing commodo magna fuga aspernatur,
                laoreet, curae lacinia platea voluptatibus purus, erat veritatis excepturi odio mattis non! Maxime quod etiam deserunt.
                ucimus eleifend lacinia cumque, optio, adipisci placerat.',
                'type' => 'wysiwyg',
            ),
        ),
    );

    return $about_proporzional_section;
}

add_filter('cmb2_meta_boxes', 'metabox_for_about_proporzional_section');



// repeater add more option for about proporzional image
function about_proporzional_image_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'about-proporzional-repeater',
        'title' => 'Add More Option For About Proporzional Image',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'about.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'proporzional-image',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Add More {#}',
            'add_button' => 'Add Another Option',
            'remove_button' => 'Remove Option',
            'closed' => true,
            'sortable' => true,
        ),
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Image',
        'desc' => 'Upload Proporzional Slider Image',
        'id' => 'about-proporzional-slider-image',
        'type' => 'file',
    ));
}

add_action('cmb2_admin_init', 'about_proporzional_image_metaboxes');


// repeater add more option for about service 
function about_service_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'about-empty-section-repeater',
        'title' => 'Add More Option For About Service',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'about.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'about-service',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Add More {#}',
            'add_button' => 'Add Another Option',
            'remove_button' => 'Remove Option',
            'closed' => true,
            'sortable' => true,
        ),
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Icon Class Name',
        // 'desc' => 'Upload Proporzional Slider Image',
        'id' => 'about-service-icon',
        'type' => 'text',
    ));
    $cmb->add_group_field($add_more_option, array(
        'name' => 'Title',
        // 'desc' => 'Upload Proporzional Slider Image',
        'id' => 'about-service-title',
        'type' => 'text',
    ));
    $cmb->add_group_field($add_more_option, array(
        'name' => 'Title',
        // 'desc' => 'Upload Proporzional Slider Image',
        'id' => 'about-service-desc',
        'type' => 'wysiwyg',
    ));
}

add_action('cmb2_admin_init', 'about_service_metaboxes');


// repeater add more option for about our service 
function about_our_service_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'about-our-service-repeater',
        'title' => 'Add More Option For About Our Service',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'about.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'about-our-service',
        'type' => 'group',
        'repeatable' => true,
        'options' => array(
            'group_title' => 'Add More {#}',
            'add_button' => 'Add Another Option',
            'remove_button' => 'Remove Option',
            'closed' => true,
            'sortable' => true,
        ),
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Iamge',
        'id' => 'about-our-service-image',
        'type' => 'file',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Title',
        'id' => 'about-our-service-title',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Description',
        'id' => 'about-our-service-desc',
        'type' => 'wysiwyg',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Link Title',
        'id' => 'about-our-service-link-title',
        'type' => 'text',
    ));


}

add_action('cmb2_admin_init', 'about_our_service_metaboxes');




// metabox for about service details
function metabox_for_about_service_details_section(array $about_service_details_section)
{
    $about_service_details_section[] = array(
        'id' => 'about-page-header-section',
        'title' => 'Our Service About Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'about.php',
        ),
        'fields' => array(

            array(
                'id' => 'about-service-details-title',
                'name' => 'Title',
                'default' => 'SERVICES DETAILS',
                'type' => 'text',
            ),

        ),
    );

    return $about_service_details_section;
}

add_filter('cmb2_meta_boxes', 'metabox_for_about_service_details_section');

