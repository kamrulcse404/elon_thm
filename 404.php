<?php
get_header();
?>

<div class="header-title ken-burn" data-parallax="scroll" data-position="top" data-natural-height="600" data-natural-width="1920" data-image-src="<?php echo get_post_meta(get_the_ID(), 'blog-container-background', true) ?>">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1>404 Not Found <br> <a href="<?php echo  home_url(); ?>"><p>Go To Home</p></a></h1>
        </div>
    </div>
</div>

<?php
get_footer();
?>