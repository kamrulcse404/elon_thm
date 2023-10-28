<?php

// repeater add more option for index slider
function index_slider_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index-slider-repeater',
        'title' => 'Add More Option For Index Slider',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'index-slider-item',
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
        'name' => 'Slider Background Image',
        'desc' => 'Upload Your Slider Background Image',
        'id' => 'index-slider-background-image',
        'type' => 'file',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Slider Image',
        'desc' => 'Upload Your Slider Image',
        'id' => 'index-slider-image',
        'type' => 'file',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Slider Title',
        'desc' => 'Write Slider Title Here',
        'id' => 'index-slider-title',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Slider Content',
        'desc' => 'Write Slider Content Here',
        'id' => 'index-slider-content',
        'type' => 'wysiwyg',
    ));
}

add_action('cmb2_admin_init', 'index_slider_metaboxes');



// repeater add more option for index empty section
function index_empty_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index-empty-repeater',
        'title' => 'Add More Option For Index Service Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'index-empty-item',
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
        'desc' => 'upload Image Service',
        'id' => 'index-empty-section-service-image',
        'type' => 'file',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Section Title',
        'desc' => 'Write Title Here',
        'id' => 'index-empty-section-title',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Section Content',
        'desc' => 'Write Content Here',
        'id' => 'index-empty-section-content',
        'type' => 'wysiwyg',
    ));
}

add_action('cmb2_admin_init', 'index_empty_metaboxes');


// repeater add more option for index empty section image
function index_empty_image_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index-empty-img-repeater',
        'title' => 'Add More Option For Index Empty Section Image',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'index-empty-img-item',
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
        'desc' => 'Upload Section Slider Image',
        'id' => 'index-empty-section-image',
        'type' => 'file',
    ));
}

add_action('cmb2_admin_init', 'index_empty_image_metaboxes');



// metabox for index section
function metabox_for_index_section_item(array $index_section_item)
{
    $index_section_item[] = array(
        'id' => 'index_page_section_item',
        'title' => 'Index Page Section Item',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(
            array(
                'id' => 'index-page-section-item-title',
                'name' => 'Title',
                'default' => "WHERE WE ARE",
                'type' => 'text',
            ),

            array(
                'id' => 'index-page-section-item-location',
                'name' => 'Location',
                'default' => "We located in London - United Kingdom",
                'type' => 'text',
            ),

            array(
                'id' => 'index-page-section-item-content',
                'name' => 'Content',
                'default' => "Est illo netus natus. Blanditiis autem, justo sagittis tempora? Eligendi recusandae nisi similique parturient minima eligendi exercitation convallis litora facilisis corrupti? Ante rhoncus praesent augue. Asperiores vitae quod officiis.Cillum voluptas placeat eum praesent! Nisi. Molestias mauris ac varius? Cubilia potenti faucibus risus, maecenas pellentesque, mollitia modi, nostrud senectus, assumenda ipsa incidunt quibusdam ouis. Vel praesentium olutpat numquam incidunt hic et lacus.",
                'type' => 'wysiwyg',
            ),

            array(
                'id' => 'index-page-section-item-address',
                'name' => 'Address',
                'default' => "25/A stret AV, New York, United States",
                'type' => 'text',
            ),

            array(
                'id' => 'index-page-section-item-phone',
                'name' => 'Location',
                'default' => "(123) 02-556878533",
                'type' => 'text',
            ),

            array(
                'id' => 'index-page-section-item-map-image',
                'name' => 'Map Image',
                'default' => get_template_directory_uri() . '/assets/images/map.png',
                'type' => 'file',
            ),
        ),
    );

    return $index_section_item;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_section_item');


// metabox for index section empty container
function metabox_for_index_empty_container(array $index_empty_conatiner)
{
    $index_empty_conatiner[] = array(
        'id' => 'index_page_empty_container',
        'title' => 'Goal Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'fields' => array(
            array(
                'id' => 'index-page-empty-container-image',
                'name' => 'Image',
                'default' => get_template_directory_uri() . '/assets/images/mk-5.jpg',
                'type' => 'file',
            ),
        ),
    );

    return $index_empty_conatiner;
}

add_filter('cmb2_meta_boxes', 'metabox_for_index_empty_container');


// repeater add more option for index empty section container
function index_empty_section_container_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index-empty-section-repeater',
        'title' => 'Add More Option For Index Empty Section Container',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'index-empty-section-container',
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
        'name' => 'Icon',
        'desc' => 'Upload Container Section Icon',
        'id' => 'index-empty-section-container-icon',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Title',
        'desc' => 'Write Container Section Title',
        'id' => 'index-empty-section-container-title',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Icon',
        'desc' => 'Write Container Section Description',
        'id' => 'index-empty-section-container-desc',
        'type' => 'wysiwyg',
    ));
}

add_action('cmb2_admin_init', 'index_empty_section_container_metaboxes');



// repeater add more option for index counter section
function index_counter_section_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'index-counter-section-repeater',
        'title' => 'Add More Option For Index Counter Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'index.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'index-counter-section-container',
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
        'name' => 'Icon',
        'id' => 'index-counter-section-icon',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Data',
        'id' => 'index-counter-section-data',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Title',
        'id' => 'index-counter-section-title',
        'type' => 'text',
    ));
}

add_action('cmb2_admin_init', 'index_counter_section_metaboxes');


