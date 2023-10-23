<!DOCTYPE html>

<html lang="<?php language_attributes(); ?>">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body class="body_class">
    <div id="preloader"></div>
    <header class="fixed-top bg-transparent menu-transparent scroll-change" data-menu-anima="fade-in">
        <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
            <div class="navbar navbar-main">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php global $elon;
                                                                                            echo $elon['header-logo']['url'] ?>" alt="logo" /></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <div class="nav navbar-nav navbar-right">

                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header_menu',
                                'container' => false,
                                'items_wrap' => '%3$s',
                            ));
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>