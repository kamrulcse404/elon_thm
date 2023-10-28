<?php

/**
 * Template Name: service
 **/
get_header();

?>



<div class="header-title ken-burn" data-parallax="scroll" data-position="top" data-natural-height="600" data-natural-width="1920" data-image-src="<?php echo get_post_meta(get_the_ID(), 'service-page-background-img', true) ?>">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1><?php echo get_post_meta(get_the_ID(), 'service-page-title', true) ?></h1>
            <p><?php echo get_post_meta(get_the_ID(), 'service-page-short-desc', true) ?></p>
        </div>
    </div>
</div>



<div class="section-empty">
    <div class="content">
        <table class="grid-table border-table">
            <tbody>

                <?php

                $items = get_post_meta(get_the_ID(), 'service-container-item', true);
                $itemsPerRow = 4;
                $numRows = ceil(count($items) / $itemsPerRow);

                for ($i = 0; $i < $numRows; $i++) {
                    echo '<tr>';
                    foreach (array_slice($items, $i * $itemsPerRow, $itemsPerRow) as $item) {
                        $img = $title = $content = '';

                        if (isset($item['service-conatiner-image'])) {
                            $img = $item['service-conatiner-image'];
                        }

                        if (isset($item['service-conatainer-title'])) {
                            $title = $item['service-conatainer-title'];
                        }

                        if (isset($item['service-conatiner-content'])) {
                            $content = $item['service-conatiner-content'];
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


<?php
get_footer();
?>