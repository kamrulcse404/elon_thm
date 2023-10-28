<?php

// metabox for product page
function metabox_for_product(array $product_meta)
{
    $product_meta[] = array(
        'id' => 'product_page_title',
        'title' => 'Product Page Fields',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'product.php',
        ),
        'fields' => array(
            array(
                'id' => 'product-page-title',
                'name' => 'Title',
                'default' => 'Products',
                'type' => 'text',
            ),
            array(
                'id' => 'product-page-short-desc',
                'name' => 'Short Description',
                'default' => 'Products and clients',
                'type' => 'textarea',
            ),
            array(
                'id' => 'product-page-background-img',
                'name' => 'Upload background Image ',
                'default' => get_template_directory_uri() . '/assets/images/long-2.jpg',
                'type' => 'file',
            ),
        ),
    );

    return $product_meta;
}

add_filter('cmb2_meta_boxes', 'metabox_for_product');