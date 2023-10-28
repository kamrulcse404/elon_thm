<?php

// metabox for blog container section
function metabox_for_blog_container_section(array $blog_container_section)
{
    $blog_container_section[] = array(
        'id' => 'about-page-header-section',
        'title' => 'About Header  Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'blog.php',
        ),
        'fields' => array(
            array(
                'id' => 'blog-container-background',
                'name' => 'Upload Blog Container Background',
                'default' => get_template_directory_uri() . '/assets/images/long-4.jpg',
                'type' => 'file',
            ),

            array(
                'id' => 'blog-container-title',
                'name' => 'Blogs Title',
                'default' => 'Blogs',
                'type' => 'text',
            ),

            array(
                'id' => 'blog-container-desc',
                'name' => 'Blogs Short Description',
                'default' => 'Our Blogs Here',
                'type' => 'textarea',
            ),
        ),
    );

    return $blog_container_section;
}

add_filter('cmb2_meta_boxes', 'metabox_for_blog_container_section');