<?php
defined('ABSPATH') || exit;

// Basic Settings //

// header logo 
Redux::setSection($opt_name, array(
    'title'            => __('Header Section', 'elon'),
    'id'               => 'header-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'header-logo',
            'type'    => 'media',
            'title' => __('Website Header Logo', 'elon'),
            'subtitle' => __('Upload Your Header Website Logo', 'elon'),
            'default' => array(
                'url' => get_template_directory_uri() . '/assets/images/logo.png',
            )
        ),
    )
));


// footer section
Redux::setSection($opt_name, array(
    'title'            => __('Footer Section', 'elon'),
    'id'               => 'footer-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'footer-logo',
            'type'    => 'media',
            'title' => __('Website Footer Logo', 'elon'),
            'subtitle' => __('Upload Your Footer Website Logo', 'elon'),
            'default' => array(
                'url' => get_template_directory_uri() . '/assets/images/logo-light.png',
            )
        ),
    )
));


// footer content section
Redux::setSection($opt_name, array(
    'title'            => __('Footer Content Section', 'elon'),
    'id'               => 'footer-content-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'footer-left-address',
            'type' => 'text',
            'title' => __('Address', 'elon'),
            'default' => 'PO Box 16122, Collins Street West, Victoria 8007, United States.',
        ),

        array(
            'id' => 'footer-left-email',
            'type' => 'text',
            'title' => __('Email', 'elon'),
            'default' => 'elon@gmail.com',
        ),

        array(
            'id' => 'footer-left-phone',
            'type' => 'text',
            'title' => __('Phone', 'elon'),
            'default' => '(+39) 320-3057955',
        ),

        array(
            'id' => 'footer-left-skype',
            'type' => 'text',
            'title' => __('Skype', 'elon'),
            'default' => 'elom123',
        ),
        
        array(
            'id' => 'footer-middle-content',
            'type' => 'editor',
            'title' => __('Content', 'elon'),
            'default' => 'Dolorem urna possimus pretium debitis assumenda, doloribus sem congue molestias itaque ante venenatis sequi exercitation excepteur!
            fusce ultricies explicabo neque! Per, pulvinar dictum dapibus dui magnadoloribus sem congue molestias itaque.',
        ),

        array(
            'id' => 'footer-facebook-url',
            'type' => 'text',
            'title' => __('Faccebook Url', 'elon'),
            'default' => 'https://www.facebook.com/',
        ),

        array(
            'id' => 'footer-twitter-url',
            'type' => 'text',
            'title' => __('Twitter Url', 'elon'),
            'default' => 'https://twitter.com/',
        ),

        array(
            'id' => 'footer-instagram-url',
            'type' => 'text',
            'title' => __('Instagram Url', 'elon'),
            'default' => 'https://www.instagram.com/',
        ),

        array(
            'id' => 'footer-youtube-url',
            'type' => 'text',
            'title' => __('YouTube Url', 'elon'),
            'default' => 'https://www.youtube.com/',
        ),

        array(
            'id' => 'footer-facebook-page-link',
            'type' => 'text',
            'title' => __('Facebook Page Link', 'elon'),
            'default' => 'https://www.facebook.com/bengalcoder16',
        ),
    )
));
