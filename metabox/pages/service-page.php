<?php

// metabox for service page
function metabox_for_service(array $service_meta)
{
    $service_meta[] = array(
        'id' => 'service_page_title',
        'title' => 'Service Page Fields',
        'object_types' => array('page'),    
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'service.php',   
        ),
        'fields' => array(

            array(
                'id' => 'service-page-background-img',
                'name' => 'Upload background Image ',
                'default' => get_template_directory_uri() . '/assets/images/long-2.jpg',
                'type' => 'file',
            ),

            array(
                'id' => 'service-page-title',
                'name' => 'Title',
                'default' => 'Services',
                'type' => 'text',
            ),
            array(
                'id' => 'service-page-short-desc',
                'name' => 'Short Description',
                'default' => 'Our Services',
                'type' => 'textarea',
            ),
        ),
    );

    return $service_meta;
}

add_filter('cmb2_meta_boxes', 'metabox_for_service');




// repeater add more option for service page services
function service_container_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'service-conatiner-repeater',
        'title' => 'Add More Option For Service Container',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'service.php',
        ),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'service-container-item',
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
        'name' => 'Service Image',
        'desc' => 'Upload Your Service Image',
        'id' => 'service-conatiner-image',
        'type' => 'file',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Service Title',
        'desc' => 'Write Service Conatiner Title Here',
        'id' => 'service-conatainer-title',
        'type' => 'text',
    ));

    $cmb->add_group_field($add_more_option, array(
        'name' => 'Service Content',
        'desc' => 'Write Service Content Here',
        'id' => 'service-conatiner-content',
        'type' => 'textarea',
    ));
}

add_action('cmb2_admin_init', 'service_container_metaboxes');