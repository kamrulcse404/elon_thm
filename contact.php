<?php

/**
 * Template Name: contact
 **/
get_header();

?>
<div class="section-two-blocks">
    <div class="row vertical-row">
        <div class="col-md-6">

            <?php echo get_post_meta(get_the_ID(), 'contact-page-map', true) ?>


            <!-- <iframe class="google-map full-screen-size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29221.79976661461!2d90.4797935!3d23.721513599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b7aba09d5aff%3A0xce98e5bc6fd9d131!2sDemra%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1698208637286!5m2!1sen!2sbd" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

        </div>
        <div class="col-md-6">
            <div class="content full-screen-size" data-sub-height="0">
                <hr class="space" />
                <hr class="space s" />
                <div class="title-base text-left text-left-sm">
                    <hr />
                    <h4><?php echo get_post_meta(get_the_ID(), 'contact-page-title', true) ?></h4>
                </div>
                <hr class="space s" />
                <ul class="fa-ul text-bold">
                    <li><i class="fa-li im-home-5"></i> <?php echo get_post_meta(get_the_ID(), 'contact-page-address', true) ?></li>
                    <li><i class="fa-li im-headset"></i> <?php echo get_post_meta(get_the_ID(), 'contact-page-number', true) ?></li>
                    <li><i class="fa-li im-mail-3"></i> <?php echo get_post_meta(get_the_ID(), 'contact-page-email', true) ?></li>
                </ul>
                <hr class="space s" />



                <form id="get_contact-form" ajax_url="<?php echo admin_url('admin-ajax.php'); ?>" action="http://www.framework-y.com/scripts/php/contact-form.php" class="form-box form-ajax" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <input id="name" name="user_full_name" placeholder="Name" type="text" class="form-control form-value" required>
                        </div>
                        <div class="col-md-6">
                            <input id="email" name="user_email" placeholder="Email" type="email" class="form-control form-value" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr class="space xs" />

                            <input id="phone" name="user_phone_number" placeholder="Phone" type="text" class="form-control form-value">

                            <hr class="space xs" />

                            <textarea id="messagge" name="user_message" placeholder="Type here your message" class="form-control form-value" required></textarea>

                            <hr class="space s" />
                            <button class="anima-button circle-button btn-sm btn" type="submit" name="submit"><i class="im-mail-send"></i>Send messagge</button>
                        </div>
                    </div>
                    <!-- <div class="success-box">
                        <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                    </div>
                    <div class="error-box">
                        <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>