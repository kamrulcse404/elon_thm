<?php

/**
 * Template Name: home
 **/
get_header();

?>


<!-- done  -->
<div class="section-slider home-slider full-screen-size box-middle-container">
    <div class="flexslider advanced-slider slider" data-options="animation:fade">
        <ul class="slides">


            <?php

            $sliders = get_post_meta(get_the_ID(), 'index-slider-item', true);
            foreach ($sliders as $key => $slider) {
                $background_image = $image = $content = $title = '';

                if (isset($slider['index-slider-background-image'])) {
                    $background_image = $slider['index-slider-background-image'];
                }

                if (isset($slider['index-slider-image'])) {
                    $image = $slider['index-slider-image'];
                }

                if (isset($slider['index-slider-content'])) {
                    $content = $slider['index-slider-content'];
                }

                if (isset($slider['index-slider-title'])) {
                    $title = $slider['index-slider-title'];
                }

                if (!empty($sliders) && $key % 2 == 0) {
            ?>

                    <li data-slider-anima="fade-left">
                        <div class="section-slide">
                            <div class="bg-cover" style="background-image:url('<?php echo $background_image ?>')">
                            </div>
                            <div class="container">
                                <div class="container-middle">
                                    <div class="container-inner text-left">
                                        <div class="row vertical-row">
                                            <div class="col-md-4 col-sm-12">
                                                <h1 class="text-xxl anima">WELCOME<br />CREATIVE</h1>
                                                <hr class="space s" />
                                                <p class="anima text-m">
                                                    <?php echo $content ?>
                                                </p>
                                                <hr class="space m" />
                                                <button class="btn circle-button anima anima-fade-left" type="button">Contact us</button><span class="space"></span>
                                            </div>
                                            <div class="col-md-8 anima anima-fade-right hidden-xs">
                                                <hr class="space" />
                                                <img src="<?php echo $image ?>" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>



                <?php
                } else {
                ?>

                    <li data-slider-anima="fade-left">
                        <div class="section-slide">
                            <div class="bg-cover" style="background-image:url('<?php echo $background_image ?>')">
                            </div>
                            <div class="container">
                                <div class="container-middle">
                                    <div class="container-inner text-left">
                                        <div class="row vertical-row">
                                            <div class="col-md-8 anima anima-fade-right hidden-xs">
                                                <hr class="space" />
                                                <img src="<?php echo $image ?>" alt="" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <h1 class="text-xxl anima">STAY<br />TUNED</h1>
                                                <hr class="space s" />
                                                <p class="anima text-m">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                                                    tempor incididunt.
                                                </p>
                                                <hr class="space m" />
                                                <button class="btn circle-button anima anima-fade-left" type="button">Our services</button><span class="space"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

            <?php
                }
            }
            ?>
        </ul>
    </div>
</div>

<!-- done  -->
<div class="section-empty">
    <div class="content">
        <table class="grid-table border-table">
            <tbody>

                <?php

                $items = get_post_meta(get_the_ID(), 'index-empty-item', true);
                $itemsPerRow = 4;
                $numRows = ceil(count($items) / $itemsPerRow);

                for ($i = 0; $i < $numRows; $i++) {
                    echo '<tr>';
                    foreach (array_slice($items, $i * $itemsPerRow, $itemsPerRow) as $item) {
                        $img = $title = $content = '';

                        if (isset($item['index-empty-section-service-image'])) {
                            $img = $item['index-empty-section-service-image'];
                        }

                        if (isset($item['index-empty-section-title'])) {
                            $title = $item['index-empty-section-title'];
                        }

                        if (isset($item['index-empty-section-content'])) {
                            $content = $item['index-empty-section-content'];
                        }



                        echo '<td>';

                            echo '<div class="advs-box advs-box-top-icon" data-anima="pulse-fast" data-trigger="hover">';


                                echo '<img src="'. $img .'" alt="">';

                                echo '<h3>';
                                    echo $title;
                                echo '</h3>';

                                echo '<p>';
                                    echo $content;
                                echo '</p>';


                            echo '</div>';

                        echo '</td>';
                    }
                    echo '</tr>';
                }

                ?>

            </tbody>
        </table>
    </div>
</div>

<!-- done  -->
<div class="section-empty no-paddings">
    <div class="content">
        <div class="flexslider carousel gallery nav-inner" data-options="minWidth:150,numItems:5,itemMargin:0">
            <ul class="slides">

                <?php

                $images = get_post_meta(get_the_ID(), 'index-empty-img-item', true);

                if (!empty($images)) {
                    foreach ($images as $image) {
                        $img = '';

                        if (isset($image['index-empty-section-image'])) {
                            $img = $image['index-empty-section-image'];
                        }
                ?>

                        <li>
                            <a class="img-box img-scale-up lightbox grayscale row-10" href="<?php echo $img ?>" data-lightbox-anima="show-scale">
                                <img src="<?php echo $img ?>" alt="">

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

<!-- done  -->
<div class="section-empty section-item">
    <div class="container content">
        <div class="row">
            <div class="col-md-8">
                <div class="title-base text-left">
                    <hr />
                    <h2><?php echo get_post_meta(get_the_ID(), 'index-page-section-item-title', true) ?></h2>
                    <p><?php echo get_post_meta(get_the_ID(), 'index-page-section-item-location', true) ?></p>
                </div>
                <hr class="space s" />
                <p>
                    <?php echo get_post_meta(get_the_ID(), 'index-page-section-item-content', true) ?>
                </p>
                <hr class="space m" />
                <div class="icon-list text-left">
                    <div class="list-item">
                        <i class="im-map-marker2 text-m"></i>
                        <label><?php echo get_post_meta(get_the_ID(), 'index-page-section-item-address', true) ?></label>
                    </div>
                    <div class="list-item">
                        <i class="im-phone-2 text-m"></i>
                        <label><?php echo get_post_meta(get_the_ID(), 'index-page-section-item-phone', true) ?></label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="google-map circle">
                    <img class="google-map circle" src="<?php echo get_post_meta(get_the_ID(), 'index-page-section-item-map-image', true) ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- done  -->
<div class="section-bg-color">
    <div class="container content">
        <div class="row">

            <?php

            $counters = get_post_meta(get_the_ID(), 'index-counter-section-container', true);

            // echo '<pre>';
            // print_r($counters);
            // exit;

            if (!empty($counters)) {
                foreach ($counters as $counter) {
                    $icon = $title = $data = '';

                    if (isset($counter['index-counter-section-icon'])) {
                        $icon = $counter['index-counter-section-icon'];
                    }

                    if (isset($counter['index-counter-section-title'])) {
                        $title = $counter['index-counter-section-title'];
                    }

                    if (isset($counter['index-counter-section-data'])) {
                        $data = (int)$counter['index-counter-section-data'];
                    }
            ?>

                    <div class="col-md-3">
                        <div class="icon-box icon-box-top-bottom counter-box-icon">
                            <div class="icon-box-cell">
                                <i class="<?php echo $icon; ?>"></i>
                            </div>
                            <div class="icon-box-cell">
                                <b><label class="counter text-xl" data-speed="5000" data-to="<?php echo $data; ?>"></label></b>
                                <p class="text-s"><?php echo $title ?></p>
                            </div>
                        </div>
                    </div>

            <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- done  -->
<div class="section-empty">
    <div class="container content">
        <div class="row vertical-row">
            <div class="col-md-6">
                <img src="<?php echo get_post_meta(get_the_ID(), 'index-page-empty-container-image', true) ?>" alt="" />
            </div>
            <div class="col-md-6">

                <?php

                $contents = get_post_meta(get_the_ID(), 'index-empty-section-container', true);

                if (!empty($contents)) {
                    foreach ($contents as $content) {
                        $icon = $title = $desc = '';

                        if (isset($content['index-empty-section-container-icon'])) {
                            $icon = $content['index-empty-section-container-icon'];
                        }

                        if (isset($content['index-empty-section-container-title'])) {
                            $title = $content['index-empty-section-container-title'];
                        }

                        if (isset($content['index-empty-section-container-desc'])) {
                            $desc = $content['index-empty-section-container-desc'];
                        }
                ?>

                        <div class="icon-box">
                            <div class="icon-box-cell">
                                <i class="<?php echo $icon; ?>"></i>
                            </div>
                            <div class="icon-box-cell">
                                <label class="text-m"><?php echo $title; ?></label>
                                <p class="text-s"><?php echo $desc; ?></p>
                            </div>
                        </div>
                        <hr class="space m" />

                <?php
                    }
                }

                ?>

            </div>
        </div>
    </div>
</div>

<!-- <div class="section-bg-image parallax-window" data-natural-height="800" data-natural-width="1980" data-parallax="scroll" data-image-src="../images/hd-32.jpg">
    <div class="container content overlay-content   text-center">
        <hr class="space" />
        <div class="title-base" data-anima="show-scale" data-trigger="hover">
            <hr class="anima" />
            <h2>STAY TUNED</h2>
            <p>Countdown for the start of the end</p>
        </div>

        <div class="countdown text-s" data-time="02/21/2018 10:30:00" data-utc-offset="-5">
            <div>
                <span class="days countdown-values text-xl">00</span><br /><span class="countdown-label">Days</span>
            </div>
            <div>
                <span class="hours countdown-values text-xl">00</span><br /><span class="countdown-label">Hours</span>
            </div>
            <div>
                <span class="minutes countdown-values text-xl">00</span><br /><span class="countdown-label">Mins</span>
            </div>
            <div>
                <span class="seconds countdown-values text-xl">00</span><br /><span class="countdown-label">Secs</span>
            </div>
        </div>
        <hr class="space m" />
        <p>
            Corrupti donec repellat magnis assumenda accusantium consequatur aliquet potenti.<br />
            Aut aspernatur nisi sapiente consequatur consequuntur<br />
            omnis aperiam hymenaeos laboriosam scelerisque quas<br />
            Architecto! Debitis? Fusce lorem.
        </p>
        <hr class="space" />
    </div>
</div> -->

<!-- <div class="section-empty section-item">
    <div class="container content">
        <div class="title-base text-left">
            <hr />
            <h2>Fast informations</h2>
            <p>Check here some of most common question about our services</p>
        </div>
        <hr class="space m" />
        <div class="row">
            <div class="col-md-6">
                <div class="tab-box left pills" data-tab-anima="fade-right">
                    <ul class="nav nav-pills col-md-4">
                        <li class="active"><a href="#">Warranty</a></li>
                        <li><a href="#">Copyright</a></li>
                        <li><a href="#">Support period</a></li>
                    </ul>
                    <div class="panel-box col-md-8">
                        <div class="panel active">
                            A exercitationem eu minus autem minim provident dignissimos ea.
                            In suspendisse pariatur, perspiciatis viverra assumenda platea non aliquid porttitor ratione maecenas rerumdelectus
                            dignissimos impedit.
                        </div>
                        <div class="panel">
                            A exercitationem eu minus autem minim provident dignissimos ea.
                            In suspendisse pariatur, perspiciatis viverra assumenda platea non aliquid porttitor ratione maecenas rerumdelectus
                            dignissimos impedit.
                        </div>
                        <div class="panel">
                            A exercitationem eu minus autem minim provident dignissimos ea.
                            In suspendisse pariatur, perspiciatis viverra assumenda platea non aliquid porttitor ratione maecenas rerumdelectus
                            dignissimos impedit.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tab-box left pills" data-tab-anima="fade-right">
                    <ul class="nav nav-pills col-md-4">
                        <li class="active"><a href="#">Money back</a></li>
                        <li><a href="#">Shipments times</a></li>
                        <li><a href="#">Shipments costs</a></li>
                    </ul>
                    <div class="panel-box col-md-8">
                        <div class="panel active">
                            A exercitationem eu minus autem minim provident dignissimos ea.
                            In suspendisse pariatur, perspiciatis viverra assumenda platea non aliquid porttitor ratione maecenas rerumdelectus
                            dignissimos impedit.
                        </div>
                        <div class="panel">
                            A exercitationem eu minus autem minim provident dignissimos ea.
                            In suspendisse pariatur, perspiciatis viverra assumenda platea non aliquid porttitor ratione maecenas rerumdelectus
                            dignissimos impedit.
                        </div>
                        <div class="panel">
                            A exercitationem eu minus autem minim provident dignissimos ea.
                            In suspendisse pariatur, perspiciatis viverra assumenda platea non aliquid porttitor ratione maecenas rerumdelectus
                            dignissimos impedit.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->



<?php
get_footer();
?>