<?php

/**
 * Template Name: project
 **/
get_header();

?>



<div class="header-title ken-burn" data-parallax="scroll" data-position="top" data-natural-height="600" data-natural-width="1920" data-image-src="<?php echo get_post_meta(get_the_ID(), 'project-page-background-img', true) ?>">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1><?php echo get_post_meta(get_the_ID(), 'project-page-title', true) ?></h1>
            <p><?php echo get_post_meta(get_the_ID(), 'project-page-short-desc', true) ?></p>
        </div>
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


<?php
get_footer();
?>