<?php

// metabox for project page
function metabox_for_project(array $project_meta)
{
    $project_meta[] = array(
        'id' => 'project_page_title',
        'title' => 'Project Page Fields',
        'object_types' => array('page'),    
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'projects.php',
        ),
        'fields' => array(

            array(
                'id' => 'project-page-background-img',
                'name' => 'Upload background Image ',
                'default' => get_template_directory_uri() . '/assets/images/long-2.jpg',
                'type' => 'file',
            ),

            array(
                'id' => 'project-page-title',
                'name' => 'Title',
                'default' => 'Projects',
                'type' => 'text',
            ),
            array(
                'id' => 'project-page-short-desc',
                'name' => 'Short Description',
                'default' => 'Projects and clients',
                'type' => 'textarea',
            ),
        ),
    );

    return $project_meta;
}

add_filter('cmb2_meta_boxes', 'metabox_for_project');