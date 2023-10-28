<?php
get_header();

?>
<div class="header-base bg-cover" style="background-image:url(<?php echo get_post_meta(get_the_ID(), 'single-blog-background-image', true) ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="title-base text-left">
                    <h1 style="color: white;"><?php echo  single_cat_title('', false)  ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Get the current category
$current_category = get_queried_object();

if (have_posts()) :
    while (have_posts()) :
        the_post();

?>

        <div class="section-two-blocks" style="height:750px;">
            <div class="row">
                <div class="col-md-6" style="margin: 20px;">
                    <a class="img-box"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" /></a>
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <hr class="space s" />
                        <div class="tag-row">

                            <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                            <span><i class="fa fa-calendar"></i> <a href="<?php echo get_permalink(); ?>"><?php echo date('d / m / Y'); ?></a></span>

                            <?php
                            $tags = get_the_tags();
                            if ($tags) {
                                foreach ($tags as $tag) {
                                    echo '<span><i class="fa fa-bookmark"></i> <a href="' . get_tag_link($tag) . '">' . $tag->name . '</a></span>';
                                }
                            }
                            ?>

                        </div>
                        <hr class="space m" />
                        <p>
                            <?php echo the_content(); ?>
                        </p>
                        <hr class="space s" />

                        <div class="btn-group social-group">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" data-social="share-facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook text-s circle"></i></a>
                            <a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo esc_url(get_permalink()); ?>" data-social="share-twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter text-s circle"></i></a>

                            <a target="_blank" href="https://www.linkedin.com/shareArticle?url=<?php echo esc_url(get_permalink()); ?>" data-social="share-linkedin" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin text-s circle"></i></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>


<?php
    endwhile;
else :
    echo 'No posts found.';
endif;
?>



<!-- <div class="section-empty section-item">
    <div class="container content">
        <div class="row">
            <div class="col-md-6">
                <div class="comment-list">
                    <h4>POST COMMENTS</h4>
                    <hr class="space s" />
                    <div class="item row">
                        <img src="../images/team-2.jpg" class="col-md-1" alt="" />
                        <div class="col-md-10">
                            <p class="name">Federico Schiocchet <span>25 feb, 2015</span></p>
                            <p class="msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea coSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                        </div>
                    </div>
                    <div class="item row">
                        <img src="../images/team-3.jpg" class="col-md-1" alt="" />
                        <div class="col-md-10">
                            <p class="name">Vaky Yo <span>25 feb, 2015</span></p>
                            <p class="msg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-box">
                    <h4>LEAVE A COMMENT</h4>
                    <hr class="space m" />
                    <div class="row">
                        <div class="col-md-6">
                            <p>Name</p>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <p>Email</p>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr class="space xs" />
                    <div class="row">
                        <div class="col-md-12">
                            <p>Website</p>
                            <input type="text" class="form-control" placeholder="">
                            <hr class="space xs" />
                            <p>Messagge</p>
                            <textarea name="messagge" class="form-control"></textarea>
                            <hr class="space s" />
                            <button class="btn btn-xs" type="button">Send comment</button>
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