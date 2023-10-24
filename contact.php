<?php

/**
 * Template Name: contact
 **/
get_header();

?>
    <div class="section-two-blocks">
        <div class="row vertical-row">
            <div class="col-md-6">
                <div class="google-map full-screen-size" data-sub-height="0"  data-marker-pos-top="50" data-coords="51.5171901,-0.0557625" data-marker="http://templates.framework-y.com/elon/images/marker-map.png"></div>
            </div>
            <div class="col-md-6">
                <div class="content full-screen-size" data-sub-height="0">
                    <hr class="space" /><hr class="space s" />
                    <div class="title-base text-left text-left-sm">
                        <hr />
                        <h4>CONTACT US</h4>
                    </div>
                    <hr class="space s" />
                    <ul class="fa-ul text-bold">
                        <li><i class="fa-li im-home-5"></i> 19TH & DOLORES ST CA 94114, UNITED STATES</li>
                        <li><i class="fa-li im-headset"></i> (123) 0 123 455669</li>
                        <li><i class="fa-li im-mail-3"></i> info@Elon.com</li>
                    </ul>               
                    <hr class="space s" />
                    <form action="http://www.framework-y.com/scripts/php/contact-form.php" class="form-box form-ajax" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input id="name" name="name" placeholder="Name" type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-6">
                                <input id="email" name="email" placeholder="Email" type="email" class="form-control form-value" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <hr class="space xs" />
                                <input id="phone" name="phone" placeholder="Phone" type="text" class="form-control form-value">
                                <hr class="space xs" />
                                <textarea id="messagge" name="messagge" placeholder="Type here your message" class="form-control form-value" required></textarea>
                                <hr class="space s" />
                                <button class="anima-button circle-button btn-sm btn" type="submit"><i class="im-mail-send"></i>Send messagge</button>
                            </div>
                        </div>
                        <div class="success-box">
                            <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                        </div>
                        <div class="error-box">
                            <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
<?php
get_footer();
?>