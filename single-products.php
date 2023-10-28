<?php

get_header();

?>

<div class="header-title ken-burn" data-parallax="scroll" data-position="top" data-image-src="<?php echo get_post_meta(get_the_ID(), 'single-product-background-image', true); ?>" data-natural-width="1920" data-natural-height="600">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</div>
<div class="section-empty section-item">
    <div class="container content">
        <div class="row">
            <div class="col-md-8">
                <div class="flexslider slider white nav-inner">
                    <ul class="slides">

                        <?php

                        $images = get_post_meta(get_the_ID(), 'single-product-gallery', true);


                        if (!empty($images)) {
                            foreach ($images as $image) {
                                $img = '';

                                if (isset($image['single-product-image-gallery'])) {
                                    $img = $image['single-product-image-gallery'];
                                }
                        ?>

                                <li>
                                    <a class="img-box lightbox" href="<?php echo $img; ?>" data-lightbox-anima="fade-top">
                                        <img src="<?php echo $img; ?>" alt="">
                                    </a>
                                </li>

                        <?php
                            }
                        }
                        ?>



                    </ul>
                </div>
            </div>
            <div class="col-md-4 portfolio-details">
                <h4 class="text-m">DETAILS</h4>
                <hr class="space m" />
                <ul class="fa-ul ">


                    <?php

                    $details = get_post_meta(get_the_ID(), 'single-product-details', true);


                    if (!empty($details)) {
                        foreach ($details as $detail) {
                            $tag = '';

                            if (isset($detail['single-product-details-key-word'])) {
                                $tag = $detail['single-product-details-key-word'];
                            }
                    ?>

                            <li><i class="fa-li im-structure"></i><?php echo $tag; ?></li>

                    <?php
                        }
                    }
                    ?>
                </ul>
               
            </div>
        </div>
        <hr class="space m" />
        <h4 class="text-m">INFORMATIONS</h4>
        <hr class="space m" />
        <p>
            <?php echo the_content(); ?>
        </p>
        <hr class="space m" />
        <div class="btn-group social-group">
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" data-social="share-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                <i class="fa fa-facebook text-s circle"></i>
            </a>

            <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>" data-social="share-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                <i class="fa fa-twitter text-s circle"></i>
            </a>
            <!-- <a target="_blank" href="#" data-social="share-google" data-toggle="tooltip" data-placement="top" title="Google+">
                <i class="fa fa-google-plus text-s circle"></i>
            </a> -->
            <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>" data-social="share-linkedin" data-toggle="tooltip" data-placement="top" title="LinkedIn">
                <i class="fa fa-linkedin text-s circle"></i>
            </a>
        </div>
    </div>
</div>


<?php
get_footer();
?>