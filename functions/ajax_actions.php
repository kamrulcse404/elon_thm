<?php


// user contact 
add_action('wp_ajax_get_contact_data', 'get_contact_data');
add_action('wp_ajax_nopriv_get_contact_data', 'get_contact_data');

function get_contact_data()
{
    $formdata = [];
    wp_parse_str($_POST['get_contact_data'], $formdata);


    $user_full_name = sanitize_text_field($formdata['user_full_name']);
    $user_email = sanitize_email($formdata['user_email']);
    $user_phone_number = sanitize_text_field($formdata['user_phone_number']);
    $user_message = sanitize_text_field($formdata['user_message']);

    $data = array(
        'user_full_name' => $user_full_name,
        'user_email' => $user_email,
        'user_phone_number' => $user_phone_number,
        'user_message' => $user_message,
    );


    global $wpdb;
    // Insert data into the database
    $table_name = $wpdb->prefix . 'user_contact';

    $wpdb->insert($table_name, $data);

    // send mail code start 

    $to = 'hasan@gmail.com';
    $subject = 'Subject';
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] = 'From:' . "testing@gmail.com";


    //Message
    $message = "Your registration is successful.Your registration number is 1234 ";

    // wp_mail($to, $subject, $message, $headers);

    // Send a response
    wp_send_json_success('Congratulations. Your message has been sent successfully');

    wp_die();
}