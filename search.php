<?php

get_header();

?>



<div class="header-title ken-burn" data-parallax="scroll" data-position="top" data-natural-height="600" data-natural-width="1920" data-image-src="<?php echo get_post_meta(get_the_ID(), 'blog-container-background', true) ?>" style="background-color: #121830;">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1><?php printf( esc_html( _n( '1 item found', '%s items found', $wp_query->found_posts, 'elon' ) ), $wp_query->found_posts ); ?></p></h1>
           
        </div>
    </div>
</div>

<div class="section-empty section-item">
    <div class="container content">

        <?php
        if (have_posts()) {


        ?>

            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="grid-list one-row-list">
                        <div class="grid-box row">



                            <?php

                            while (have_posts()) {
                                the_post();

                            ?>
                                <div class="grid-item col-md-12">
                                    <div class="advs-box niche-box-blog">
                                        <div class="block-top">
                                            <div class="block-infos">
                                                <div class="block-data">
                                                    <p class="bd-day"><?php echo get_the_date('d'); ?></p>
                                                    <p class="bd-month"><?php echo get_the_date('M Y'); ?></p>
                                                </div>
                                                <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a>
                                            </div>
                                            <div class="block-title">
                                                <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                                                <div class="tag-row">


                                                    <?php
                                                    $tags = get_the_tags();
                                                    if ($tags) {
                                                        foreach ($tags as $tag) {
                                                            echo '<span><i class="fa fa-bookmark"></i> <a href="' . get_tag_link($tag) . '">' . $tag->name . '</a></span>';
                                                        }
                                                    }
                                                    ?>


                                                    <span><i class="fa fa-pencil"></i><a><?php echo  get_the_author(); ?></a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="img-box" href="<?php the_permalink(); ?>">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                        </a>
                                        <p class="excerpt">
                                            <?php echo the_content(); ?>
                                        </p>
                                        <a class="btn btn-sm" href="<?php the_permalink(); ?>">Read more </a>
                                        <hr class="space" />
                                    </div>
                                </div>

                            <?php
                            }

                            ?>

                        </div>

                       
                    </div>
                </div>


                <div class="col-md-3 col-sm-12 widget">


                    <?php
                    echo get_search_form();
                    ?>
                  


                    <hr class="space s" />


                    <div class="list-group list-blog">

                        <p class="list-group-item active">Categories</p>

                        <?php
                        $categories = get_categories();

                        foreach ($categories as $category) {
                            $category_link = get_category_link($category->term_id);
                        ?>
                            <a href="<?php echo esc_url($category_link); ?>" class="list-group-item"><?php echo $category->name ?></a>

                        <?php
                        }

                        ?>
                    </div>





                    <div class="list-group latest-post-list list-blog">
                        <p class="list-group-item active">Latest posts</p>

                        <?php

                        $blogs = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'paged' => $paged,
                            'orderby' => 'date',
                            'order' => 'DESC',
                        ));

                        // echo "<pre>";

                        // print_r($blogs);

                        while ($blogs->have_posts()) {
                            $blogs->the_post(); ?>


                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="img-box circle">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <a href="<?php the_permalink(); ?>">
                                            <h5><?php echo get_the_title(); ?></h5>
                                        </a>
                                        <div class="tag-row icon-row"><span><i class="fa fa-calendar"></i><?php echo the_date('d.m.Y'); ?></span></div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        }

                        wp_reset_postdata();
                        ?>
                    </div>



                    <div class="list-group list-blog">
                        <p class="list-group-item active">Tags</p>

                        <?php
                        $tags = get_tags();

                        if ($tags) {
                            echo '<div class="tagbox">';
                            foreach ($tags as $tag) {
                                $tag_link = get_tag_link($tag->term_id);
                        ?>
                                <a href="<?php echo esc_url($tag_link); ?>"> <span><?php echo $tag->name; ?></span></a>

                                <div class="clear"></div>


                        <?php
                            }
                            echo '</div>';
                        }

                        ?>

                    </div>


                </div>



            </div>

        <?php
        } else {
        ?>

            <p style="text-align: center;">There is no Posts Found</p>

        <?php
        }
        ?>
    </div>
</div>


<?php
get_footer();
?>