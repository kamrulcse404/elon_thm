<?php

// // metabox for product single page
// function metabox_for_service_single(array $service_single_meta)
// {
//     $service_single_meta[] = array(
//         'id' => 'service_single_page',
//         'title' => 'Single Service Container',
//         'object_types' => array('service'),

//         'fields' => array(
//             array(
//                 'id' => 'single-service-image',
//                 'name' => 'Single Service Image',
//                 'default' => get_template_directory_uri() . '/assets/images/1.png',
//                 'type' => 'file',
//             ),
//         ),
//     );

//     return $service_single_meta;
// }

// add_filter('cmb2_meta_boxes', 'metabox_for_service_single');