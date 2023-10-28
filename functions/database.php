<?php


// create database for contact 
function create_database_for_user_contact()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'user_contact';

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name(
        id INT NOT NULL AUTO_INCREMENT,
        user_full_name VARCHAR(100) NOT NULL,
        user_email VARCHAR(100) NOT NULL,
        user_phone_number VARCHAR(100) NOT NULL,
        user_message TEXT NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    dbDelta($sql);
}
register_activation_hook(__FILE__, 'create_database_for_user_contact');
add_action('after_switch_theme', 'create_database_for_user_contact');
