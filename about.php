<?php

/**
 * Template Name: about
 **/
get_header();

?>

<!-- done  -->
<div class="header-title ken-burn" data-parallax="scroll" data-position="top" data-natural-height="600" data-natural-width="1920" data-image-src="<?php echo get_post_meta(get_the_ID(), 'about-header-background', true) ?>">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1><?php echo get_post_meta(get_the_ID(), 'about-header-title', true) ?></h1>
            <p><?php echo get_post_meta(get_the_ID(), 'about-header-desc', true) ?></p>
        </div>
    </div>
</div>

<!-- done  -->
<div class="section-bg-color">
    <div class="container content">
        <div class="row proporzional-row">
            <div class="col-md-4 col-sm-12">
                <div class="advs-box advs-box-side-icon boxed-inverse extra-content-cnt">
                    <div class="caption-box">
                        <p>
                            <?php echo get_post_meta(get_the_ID(), 'about-proporzional-desc', true) ?>
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="flexslider slider nav-inner" data-options="directionNav:false">
                    <ul class="slides">

                        <?php

                        $images = get_post_meta(get_the_ID(), 'proporzional-image', true);

                        if (!empty($images)) {
                            foreach ($images as $image) {
                                $img = '';

                                if (isset($image['about-proporzional-slider-image'])) {
                                    $img = $image['about-proporzional-slider-image'];
                                }
                        ?>

                                <li>
                                    <a class="img-box" data-lightbox-anima="show-scale" href="#">
                                        <img src="<?php echo $img; ?>" alt="" />
                                    </a>
                                </li>

                        <?php

                            }
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- done  -->
<div class="section-empty section-item">
    <div class="container content">

        <?php
        $services = get_post_meta(get_the_ID(), 'about-service', true);
        $itemsPerRow = 3;
        $numRows = ceil(count($services) / $itemsPerRow);

        for ($i = 0; $i < $numRows; $i++) {

            echo '<div class="row">';

            foreach (array_slice($services, $i * $itemsPerRow, $itemsPerRow) as $service) {

                $icon = $title = $des = '';

                if (isset($service['about-service-icon'])) {
                    $icon = $service['about-service-icon'];
                }

                if (isset($service['about-service-title'])) {
                    $title = $service['about-service-title'];
                }

                if (isset($service['about-service-desc'])) {
                    $des = $service['about-service-desc'];
                }

                echo '<div class="col-md-4">';
                echo ' <div class="advs-box advs-box-side-icon" data-anima="scale-up" data-trigger="hover">';


                echo '<div class="icon-box">';
                echo ' <i class="' . $icon . '">';
                echo '</i>';
                echo '</div>';

                echo '<div class="caption-box">';
                echo '<h3>' . $title . '</h3>';
                echo '<p>' . $des . '</p>';
                echo '</div>';


                echo '</div>';
                echo '</div>';
            }

            echo '<hr class="space" />';


            echo '</div>';
        }

        ?>
    </div>
</div>

<!-- done  -->
<div class="section-bg-color">
    <div class="container content">
        <div class="row">

            <?php

            $our_services = get_post_meta(get_the_ID(), 'about-our-service', true);

            if (!empty($our_services)) {
                foreach ($our_services as $our_service) {
                    $img = $title = $desc = $link_title = '';

                    if (isset($our_service['about-our-service-image'])) {
                        $img = $our_service['about-our-service-image'];
                    }

                    if (isset($our_service['about-our-service-title'])) {
                        $title = $our_service['about-our-service-title'];
                    }

                    if (isset($our_service['about-our-service-desc'])) {
                        $desc = $our_service['about-our-service-desc'];
                    }

                    if (isset($our_service['about-our-service-link-titlec'])) {
                        $link_title = $our_service['about-our-service-link-title'];
                    }
            ?>

                    <div class="col-md-4">
                        <div class="advs-box advs-box-top-icon-img boxed-inverse">
                            <a class="img-box lightbox img-scale-up" href="#">
                                <span><img src="<?php echo $img ?>" alt=""></span>
                            </a>
                            <div class="advs-box-content">
                                <h3><?php echo $title ?></h3>
                                <p>
                                    <?php echo $desc ?>
                                </p>
                                <a class="btn-text" href="#"><?php echo $link_title ?> </a>
                            </div>
                        </div>
                    </div>

            <?php
                }
            }

            ?>

            <!-- <div class="col-md-4">
                <div class="advs-box advs-box-top-icon-img boxed-inverse">
                    <a class="img-box lightbox img-scale-up" href="#">
                        <span><img src="<?php //echo get_template_directory_uri(  ) 
                                        ?>/assets/images/projects/project-2.jpg" alt=""></span>
                    </a>
                    <div class="advs-box-content">
                        <h3>Post productions</h3>
                        <p>
                            Velillum suspendisse venenatis sunt integer illo. Leo pariatur fugit excepteur culpa mollitonus.
                        </p>
                        <a class="btn-text" href="#">Take a look </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advs-box advs-box-top-icon-img boxed-inverse">
                    <a class="img-box lightbox img-scale-up" href="#">
                        <span><img src="<? php //echo get_template_directory_uri(  ) 
                                        ?>/assets/images/projects/project-3.jpg" alt=""></span>
                    </a>
                    <div class="advs-box-content">
                        <h3>Elon design</h3>
                        <p>
                            Velillum suspendisse venenatis sunt integer illo. Leo pariatur fugit excepteur culpa mollitonus.
                        </p>
                        <a class="btn-text" href="#">Try it now</a>
                    </div>
                </div>
            </div> -->


        </div>
    </div>
</div>


<!-- <div class="section-empty section-item">
    <div class="container content">
        <div class="title-base">
            <hr />
            <h2> <?php echo get_post_meta(get_the_ID(), 'about-service-details-title', true) ?>
            </h2>
        </div>
        <hr class="space m" />
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="list-group accordion-list">


                    <div class="list-group-item">
                        <a href="#">How much is plan cost?</a>
                        <div class="panel">
                            <div class="inner">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </div>
                        </div>
                    </div>


                    <div class="list-group-item">
                        <a href="#">How long is warranty period?</a>
                        <div class="panel">
                            <div class="inner">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <a href="#">Moneyback guaranted ?</a>
                        <div class="panel">
                            <div class="inner">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="tab-box right" data-tab-anima="fade-right">
                    <div class="panel-box col-md-9">
                        <div class="panel active">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                Ut wisi enim ad minim veniam, exerci tation suscipit lobortis nisl ut aliquip ex ea commodo consequat exerci tation suscipit lobortis nisl ut aliquip ex
                                ea commodo consequat. Ullamco aperiam? Convallis, soluta, dapibus, placeat porttitor molestiae nostrud sociosqu, laboris fugiat?
                                Ultricies architecto adipiscing inventore, inceptos senectus sint odit ullam eget pharetra.
                            </p>
                        </div>
                        <div class="panel">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, exerci tation suscipit lobortis nisl ut aliquip ex ea commodo consequat exerci tation suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                            </p>
                            <hr class="space s">
                            <a href="#" class="btn btn-xs">MORE DETAILS</a>
                        </div>
                        <div class="panel">
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, exerci tation suscipit lobortis nisl ut aliquip ex ea commodo consequat exerci tation suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                            </p>
                            <hr class="space s">
                            <a href="#" class="btn btn-xs">ENTER</a>
                        </div>
                    </div>
                    <ul class="nav nav-tabs col-md-3">
                        <li class="active"><a>Plans</a></li>
                        <li><a>Support</a></li>
                        <li><a>Guarantee</a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
</div> -->


<?php
get_footer();
?>