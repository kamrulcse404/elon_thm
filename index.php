<?php

/**
 * Template Name: home
 **/
get_header();

?>



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

<div class="section-empty">
    <div class="content">
        <table class="grid-table border-table">
            <tbody>
                <tr>
                    <td>
                        <div class="advs-box advs-box-top-icon" data-anima="pulse-fast" data-trigger="hover">
                            <i class="im-film-strip icon circle anima"></i>
                            <h3>POST PRODUCTION VIDEO</h3>
                            <p>
                                Interdum iusto pulvinar consequuntur augue optio, repellat fuga Purus expedita fusce temporibus est odit mi quos. Aliquid semper veritatis dignissimos.
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="advs-box advs-box-top-icon" data-anima="pulse-fast" data-trigger="hover">
                            <i class="im-paint-brush icon circle anima"></i>
                            <h3>GRPAHICS AND WEB DESIGN</h3>
                            <p>
                                Interdum iusto pulvinar consequuntur augue optio, repellat fuga Purus expedita fusce temporibus est odit mi quos. Aliquid semper veritatis dignissimos.
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="advs-box advs-box-top-icon" data-anima="pulse-fast" data-trigger="hover">
                            <i class="im-camera-2 icon circle anima"></i>
                            <h3>PHOTO MANIUPLATION</h3>
                            <p>
                                Interdum iusto pulvinar consequuntur augue optio, repellat fuga Purus expedita fusce temporibus est odit mi quos. Aliquid semper veritatis dignissimos.
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="advs-box advs-box-top-icon" data-anima="pulse-fast" data-trigger="hover">
                            <i class="im-business-manwoman icon circle anima"></i>
                            <h3>SUPPORT FOR EXPERTS</h3>
                            <p>
                                Interdum iusto pulvinar consequuntur augue optio, repellat fuga Purus expedita fusce temporibus est odit mi quos. Aliquid semper veritatis dignissimos.
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="advs-box advs-box-top-icon" data-anima="pulse-fast" data-trigger="hover">
                            <i class="im-keyboard icon circle anima"></i>
                            <h3>WEB DEVELOPMENT</h3>
                            <p>
                                Interdum iusto pulvinar consequuntur augue optio, repellat fuga Purus expedita fusce temporibus est odit mi quos. Aliquid semper veritatis dignissimos.
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="advs-box advs-box-top-icon" data-anima="pulse-fast" data-trigger="hover">
                            <i class="im-wordpress icon circle anima"></i>
                            <h3>WORDPRESS SERVICE</h3>
                            <p>
                                Interdum iusto pulvinar consequuntur augue optio, repellat fuga Purus expedita fusce temporibus est odit mi quos. Aliquid semper veritatis dignissimos.
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="advs-box advs-box-top-icon" data-anima="pulse-fast" data-trigger="hover">
                            <i class="im-target-market icon circle anima"></i>
                            <h3>MARKETING AND SEO</h3>
                            <p>
                                Interdum iusto pulvinar consequuntur augue optio, repellat fuga Purus expedita fusce temporibus est odit mi quos. Aliquid semper veritatis dignissimos.
                            </p>
                        </div>
                    </td>
                    <td>
                        <div class="advs-box advs-box-top-icon" data-anima="pulse-fast" data-trigger="hover">
                            <i class="im-server-2 icon circle anima"></i>
                            <h3>MHOSTING AND DOMAIN</h3>
                            <p>
                                Interdum iusto pulvinar consequuntur augue optio, repellat fuga Purus expedita fusce temporibus est odit mi quos. Aliquid semper veritatis dignissimos.
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="section-empty no-paddings">
    <div class="content">
        <div class="flexslider carousel gallery nav-inner" data-options="minWidth:150,numItems:5,itemMargin:0">
            <ul class="slides">
                <li>
                    <a class="img-box img-scale-up lightbox grayscale row-10" href="../images/projects/project-1.jpg" data-lightbox-anima="show-scale">
                        <img src="../images/projects/project-1.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-box img-scale-up lightbox grayscale row-10" href="../images/projects/project-2.jpg" data-lightbox-anima="show-scale">
                        <img src="../images/projects/project-2.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-box img-scale-up lightbox grayscale row-10" href="../images/projects/project-3.jpg" data-lightbox-anima="show-scale">
                        <img src="../images/projects/project-3.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-box img-scale-up lightbox grayscale row-10" href="../images/projects/project-4.jpg" data-lightbox-anima="show-scale">
                        <img src="../images/projects/project-4.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-box img-scale-up lightbox grayscale row-10" href="../images/projects/project-5.jpg" data-lightbox-anima="show-scale">
                        <img src="../images/projects/project-5.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-box img-scale-up lightbox grayscale row-10" href="../images/projects/project-6.jpg" data-lightbox-anima="show-scale">
                        <img src="../images/projects/project-6.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-box img-scale-up lightbox grayscale row-10" href="../images/projects/project-7.jpg" data-lightbox-anima="show-scale">
                        <img src="../images/projects/project-7.jpg" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="section-empty section-item">
    <div class="container content">
        <div class="row">
            <div class="col-md-8">
                <div class="title-base text-left">
                    <hr />
                    <h2>WHERE WE ARE</h2>
                    <p>We located in London - United Kingdom</p>
                </div>
                <hr class="space s" />
                <p>
                    Est illo netus natus. Blanditiis autem, justo sagittis tempora? Eligendi recusandae nisi similique parturient minima eligendi exercitation
                    convallis litora facilisis corrupti? Ante rhoncus praesent augue. Asperiores vitae quod officiis.Cillum voluptas placeat eum praesent! Nisi.
                    Molestias mauris ac varius? Cubilia potenti faucibus risus, maecenas pellentesque,
                    mollitia modi, nostrud senectus, assumenda ipsa incidunt quibusdam ouis.
                    Vel praesentium olutpat numquam incidunt hic et lacus.
                </p>
                <hr class="space m" />
                <div class="icon-list text-left">
                    <div class="list-item">
                        <i class="im-map-marker2 text-m"></i>
                        <label>25/A stret AV, New York, United States</label>
                    </div>
                    <div class="list-item">
                        <i class="im-phone-2 text-m"></i>
                        <label>(123) 02-556878533</label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="google-map circle" data-address="New York, US" data-marker="http://templates.framework-y.com/elon/images/marker-map.png" data-marker-pos-left="20" data-marker-pos-top="15"></div>
            </div>
        </div>
    </div>
</div>

<div class="section-bg-color">
    <div class="container content">
        <div class="row">
            <div class="col-md-3">
                <div class="icon-box icon-box-top-bottom counter-box-icon">
                    <div class="icon-box-cell">
                        <i class="im-globe text-xxl"></i>
                    </div>
                    <div class="icon-box-cell">
                        <b><label class="counter text-xl" data-speed="5000" data-to="1250"></label></b>
                        <p class="text-s">CONNECTIONS</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-box icon-box-top-bottom counter-box-icon">
                    <div class="icon-box-cell">
                        <i class="im-teacher text-xxl"></i>
                    </div>
                    <div class="icon-box-cell">
                        <b><label class="counter text-xl" data-speed="5000" data-to="3560"></label></b>
                        <p class="text-s">EMPLOIERS</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-box icon-box-top-bottom counter-box-icon">
                    <div class="icon-box-cell">
                        <i class="im-router text-xxl"></i>
                    </div>
                    <div class="icon-box-cell">
                        <b><label class="counter text-xl" data-speed="5000" data-to="3250"></label></b>
                        <p class="text-s">KG WIFI COVERED</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-box icon-box-top-bottom counter-box-icon">
                    <div class="icon-box-cell">
                        <i class="im-computer-3 text-xxl"></i>
                    </div>
                    <div class="icon-box-cell">
                        <b><label class="counter text-xl" data-speed="5000" data-to="52"></label></b>
                        <p class="text-s">SOFTWARE CREATED</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-empty">
    <div class="container content">
        <div class="row vertical-row">
            <div class="col-md-6">
                <img src="../images/mk-5.jpg" alt="" />
            </div>
            <div class="col-md-6">
                <div class="icon-box">
                    <div class="icon-box-cell">
                        <i class="im-checked-user circle text-xl"></i>
                    </div>
                    <div class="icon-box-cell">
                        <label class="text-m">THE BEST TECHNOLOGIES</label>
                        <p class="text-s">Possimus illum etiam aspernatur, vulputate aliquet error minus ac arcu sapiente dignissimos quis lobortis, etiam.</p>
                    </div>
                </div>
                <hr class="space m" />
                <div class="icon-box">
                    <div class="icon-box-cell">
                        <i class="im-fire-flame circle text-xl"></i>
                    </div>
                    <div class="icon-box-cell">
                        <label class="text-m">THE FIRST OF THIS KIND</label>
                        <p class="text-s">Possimus illum etiam aspernatur, vulputate aliquet error minus ac arcu sapiente dignissimos quis lobortis, etiam.</p>
                    </div>
                </div>
                <hr class="space m" />
                <div class="icon-box">
                    <div class="icon-box-cell">
                        <i class="im-space-needle circle text-xl"></i>
                    </div>
                    <div class="icon-box-cell">
                        <label class="text-m">FUTURE ORIENTED</label>
                        <p class="text-s">Possimus illum etiam aspernatur, vulputate aliquet error minus ac arcu sapiente dignissimos quis lobortis, etiam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-bg-image parallax-window" data-natural-height="800" data-natural-width="1980" data-parallax="scroll" data-image-src="../images/hd-32.jpg">
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
</div>

<div class="section-empty section-item">
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
</div>



<?php
get_footer();
?>