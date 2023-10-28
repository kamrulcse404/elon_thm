<?php

// metabox for product single page
function metabox_for_product_single(array $product_single_meta)
{
    $product_single_meta[] = array(
        'id' => 'product_single_page',
        'title' => 'Single Product Container',
        'object_types' => array('products'),

        'fields' => array(

            array(
                'id' => 'single-product-background-image',
                'name' => 'Single Product Background Image',
                'default' => get_template_directory_uri() . '/assets/images/long-4.jpg',
                'type' => 'file',
            ),
        ),
    );

    return $product_single_meta;
}

add_filter('cmb2_meta_boxes', 'metabox_for_product_single');



// repeater add more option for product single page  
function single_product_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'single_product_repeater',
        'title' => 'Add More Option For Single Page Product',
        'object_types' => array('products'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'single-product-gallery',
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
        'name' => 'Single Product Image Gallery',
        'desc' => 'Upload Multiple Image for Product Gallaery',
        'id' => 'single-product-image-gallery',
        'type' => 'file',
    ));
}

add_action('cmb2_admin_init', 'single_product_metaboxes');



// repeater add more option for single product short details 
function single_product_details_metaboxes()
{
    $cmb = new_cmb2_box(array(
        'id' => 'single_product_details_repeater',
        'title' => 'Add More Option For Single Page Product Details',
        'object_types' => array('products'),
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ));

    $add_more_option = $cmb->add_field(array(
        'id' => 'single-product-details',
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
        'name' => 'Single Product Details',
        'desc' => 'Write key word details for single product',
        'id' => 'single-product-details-key-word',
        'type' => 'text',
    ));
}

add_action('cmb2_admin_init', 'single_product_details_metaboxes');


