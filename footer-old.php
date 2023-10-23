<footer class="footer-base footer-parallax">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-left">
                    <img src="<?php global $elon;
                                echo $elon['footer-logo']['url'] ?>" alt="" />
                    <hr class="space s" />
                    <p><?php global $elon;
                        echo $elon['footer-left-address'] ?></p>
                    <p>e-mail <b> <?php global $elon;
                                    echo $elon['footer-left-email'] ?></b> </p>
                    <p>phone <b> <?php global $elon;
                                    echo $elon['footer-left-phone'] ?></b></p>
                    <p>Skype <b> <?php global $elon;
                                    echo $elon['footer-left-skype'] ?></b> </p>
                    <p><b></b></p>


                </div>
                <div class="col-md-4 footer-center text-left">
                    <p>
                        <?php global $elon;
                        echo $elon['footer-middle-content'] ?>
                    </p>
                    <hr class="space s" />
                    <div class="btn-group social-group btn-group-icons">
                        <a target="_blank" href="<?php global $elon;
                                                    echo $elon['footer-facebook-url'] ?>" data-social="share-facebook"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="<?php global $elon;
                                                    echo $elon['footer-twitter-url'] ?>" data-social="share-twitter"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="<?php global $elon;
                                                    echo $elon['footer-instagram-url'] ?>" data-social="share-google"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="<?php global $elon;
                                                    echo $elon['footer-youtube-url'] ?>" data-social="share-linkedin"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-4 footer-right text-left">
                    <h5>LIKE OUR FACEBOOK PAGE!</h5>        
                    <hr class="space s" />
                    <iframe src="<?php global $elon;
                                    echo $elon['footer-facebook-page-link'] ?>" width="400" height="250" title="Embedded Page" frameborder="0" allowfullscreen></iframe>

                </div>
            </div>
        </div>
        <div class="row copy-row">
            <div class="col-md-12 copy-text">
                © 2023 Elon - Design and Developed By <a href="https://www.bengalcoder.com/">Bengalcoder</a>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>
    
</html>