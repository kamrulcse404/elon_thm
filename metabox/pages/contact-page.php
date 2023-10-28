<?php

// metabox for contact page
function metabox_for_contact(array $contact_page)
{
    $contact_page[] = array(
        'id' => 'contact_page',
        'title' => 'Contact Page Section',
        'object_types' => array('page'),
        'show_on' => array(
            'key' => 'page-template',
            'value' => 'contact.php',
        ),
        'fields' => array(
            array(
                'id' => 'contact-page-title',
                'name' => 'Title',
                'default' => 'CONTACT US',
                'type' => 'text',
            ),

            array(
                'id' => 'contact-page-address',
                'name' => 'Contact Address',
                'default' => '19TH & DOLORES ST CA 94114, UNITED STATES',
                'type' => 'text',
            ),

            array(
                'id' => 'contact-page-number',
                'name' => 'Phone',
                'default' => '(123) 0 123 455669',
                'type' => 'text',
            ),

            array(
                'id' => 'contact-page-email',
                'name' => 'Email',
                'default' => 'info@Elon.com',
                'type' => 'text',
            ),

            array(
                'name' => 'Map Link',
                'id' => 'contact-page-map',
                'type' => 'textarea_code',
                'default' => '<iframe class="google-map full-screen-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29221.79976661461!2d90.4797935!3d23.721513599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b7aba09d5aff%3A0xce98e5bc6fd9d131!2sDemra%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1698208637286!5m2!1sen!2sbd" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
            )

        ),
    );

    return $contact_page;
}

add_filter('cmb2_meta_boxes', 'metabox_for_contact');
