<?php 

// Register the "Projects" custom post type
function custom_register_projects_post_type() {
    $labels = array(
        'name'               => _x( 'Projects', 'post type general name', 'elon' ),
        'singular_name'      => _x( 'Project', 'post type singular name', 'elon' ),
        'menu_name'          => _x( 'Projects', 'admin menu', 'elon' ),
        'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'elon' ),
        'add_new'            => _x( 'Add New', 'project', 'elon' ),
        'add_new_item'       => __( 'Add New Project', 'elon' ),
        'new_item'           => __( 'New Project', 'elon' ),
        'edit_item'          => __( 'Edit Project', 'elon' ),
        'view_item'          => __( 'View Project', 'elon' ),
        'all_items'          => __( 'All Projects', 'elon' ),
        'search_items'       => __( 'Search Projects', 'elon' ),
        'parent_item_colon'  => __( 'Parent Projects:', 'elon' ),
        'not_found'          => __( 'No projects found.', 'elon' ),
        'not_found_in_trash' => __( 'No projects found in Trash.', 'elon' ),
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description of your Projects.', 'elon' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'menu_icon'          => 'dashicons-portfolio', // You can choose an icon here
    );

    register_post_type( 'projects', $args );
}

add_action( 'init', 'custom_register_projects_post_type' );


// Register Custom Post Type
function custom_products_post_type() {
    $labels = array(
        'name'                  => _x( 'Products', 'Post Type General Name', 'elon' ),
        'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'elon' ),
        'menu_name'             => __( 'Products', 'elon' ),
        'name_admin_bar'        => __( 'Product', 'elon' ),
        'archives'              => __( 'Product Archives', 'elon' ),
        'attributes'            => __( 'Product Attributes', 'elon' ),
        'parent_item_colon'     => __( 'Parent Product:', 'elon' ),
        'all_items'             => __( 'All Products', 'elon' ),
        'add_new_item'          => __( 'Add New Product', 'elon' ),
        'add_new'               => __( 'Add New', 'elon' ),
        'new_item'              => __( 'New Product', 'elon' ),
        'edit_item'             => __( 'Edit Product', 'elon' ),
        'update_item'           => __( 'Update Product', 'elon' ),
        'view_item'             => __( 'View Product', 'elon' ),
        'view_items'            => __( 'View Products', 'elon' ),
        'search_items'          => __( 'Search Product', 'elon' ),
        'not_found'             => __( 'Not found', 'elon' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'elon' ),
        'featured_image'        => __( 'Featured Image', 'elon' ),
        'set_featured_image'    => __( 'Set featured image', 'elon' ),
        'remove_featured_image' => __( 'Remove featured image', 'elon' ),
        'use_featured_image'    => __( 'Use as featured image', 'elon' ),
        'insert_into_item'      => __( 'Insert into product', 'elon' ),
        'uploaded_to_this_item' => __( 'Uploaded to this product', 'elon' ),
        'items_list'            => __( 'Products list', 'elon' ),
        'items_list_navigation' => __( 'Products list navigation', 'elon' ),
        'filter_items_list'     => __( 'Filter products list', 'elon' ),
    );
    $args = array(
        'label'                 => __( 'Product', 'elon' ),
        'description'           => __( 'Products', 'elon' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'hierarchical'          => true, // This makes it hierarchical
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-cart', // Change this to your desired icon
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'products', $args );
}
add_action( 'init', 'custom_products_post_type', 0 );




/**
 * Create a hierarchical custom taxonomy for "products" post type.
 */
function create_product_categories_taxonomy() {
    $labels = array(
        'name'              => _x('Product Categories', 'taxonomy general name', 'elon'),
        'singular_name'     => _x('Product Category', 'taxonomy singular name', 'elon'),
        'search_items'      => __('Search Product Categories', 'elon'),
        'all_items'         => __('All Product Categories', 'elon'),
        'parent_item'       => __('Parent Product Category', 'elon'),
        'parent_item_colon' => __('Parent Product Category:', 'elon'),
        'edit_item'         => __('Edit Product Category', 'elon'),
        'update_item'       => __('Update Product Category', 'elon'),
        'add_new_item'      => __('Add New Product Category', 'elon'),
        'new_item_name'     => __('New Product Category Name', 'elon'),
        'menu_name'         => __('Product Categories', 'elon'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'product-categories'), // Customize the URL slug as needed.
    );

    register_taxonomy('product_categories', 'products', $args);
}

// Hook the taxonomy creation function to the 'init' action.
add_action('init', 'create_product_categories_taxonomy');



