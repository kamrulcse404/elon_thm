<?php

/**
 * Template Name: product
 **/
get_header();

?>


<div class="header-title ken-burn" data-parallax="scroll" data-position="top" data-natural-height="600" data-natural-width="1920" data-image-src="<?php echo get_post_meta(get_the_ID(), 'product-page-background-img', true) ?>
">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1><?php echo get_post_meta(get_the_ID(), 'product-page-title', true) ?></h1>
            <p><?php echo get_post_meta(get_the_ID(), 'product-page-short-desc', true) ?></p>
        </div>
    </div>
</div>
<div class="section-empty section-item">
    <div class="content">
        <div class="maso-list gallery no-margins list-sm-6">


            <div class="navbar navbar-inner">
                <div class="navbar-toggle"><i class="fa fa-bars"></i><span>Menu</span><i class="fa fa-angle-down"></i></div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav nav-center over inner maso-filters">
                        <li class="current-active active"><a data-filter="maso-item">All</a></li>

                        <?php
                        $categories = get_terms(array(
                            'taxonomy' => 'product_categories',
                            'hide_empty' => false,
                        ));

                        if (!empty($categories)) {
                            foreach ($categories as $category) {
                                echo '<li><a data-filter="' . $category->slug . '">' . $category->name . '</a></li>';
                            }
                        }
                        ?>

                        <li><a class="maso-order" data-sort="asc"><i class="fa fa-arrow-down"></i></a></li>


                    </ul>
                </div>
            </div>


            <div class="maso-box row no-margins" data-lightbox-anima="fade-top">

                <?php

                $args = array(
                    'post_type' => 'products',
                    'posts_per_page' => -1,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $categories = get_the_terms(get_the_ID(), 'product_categories');


                        // Check if there are categories
                        if ($categories && !is_wp_error($categories)) {
                            $category_slugs = array();
                            foreach ($categories as $category) {
                                $category_slugs[] = $category->slug;
                            }
                            $category_list = implode(' ', $category_slugs);
                        }

                        // Get the featured image URL
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

                ?>

                        <div data-sort="2" class="maso-item col-md-4 <?php echo $category_list; ?>">
                            <div class="img-box adv-img adv-img-classic-box">
                                <a class="img-box mfp-inline" href="###">
                                    <img src="<?php echo $featured_image_url; ?>" alt="">
                                </a>

                                <div class="caption">
                                    <div class="caption-inner">
                                        <a href="<?php the_permalink() ?>">
                                            <h2><?php the_title(); ?></h2>
                                        </a>
                                        <p class="sub-text"><?php echo $category_list; ?></p>
                                        <p class="big-text" style="color: white;">
                                        <?php echo esc_attr(get_the_excerpt()); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                <?php
                    }
                    wp_reset_postdata();
                }

                ?>

                <div class="clear"></div>
            </div>
            <div class="list-nav">
                <a href="#" class="btn btn-sm load-more-maso" data-pagination-anima="fade-bottom" data-page-items="9">
                    Load More
                    <i class="fa fa-arrow-down"></i>
                </a>
            </div>



        </div>
        <hr class="space m" />
    </div>
</div>


<?php
get_footer();
?>