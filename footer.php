<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stonecanyon
 */

?>

<footer class="footer-wrap">
    <div class="signup">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="signup-inner">
                        <h2 class="sch-header">Keep up with us!</h2>
                        <p>Sign up to receive exclusive offers and informative newsletters on Stone Canyon Homes and the tiny house industry.</p>

                        <div class="signup-form">
                            <form action="">
                                <input type="text" placeholder="Enter your email address">
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-wrap-inner">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="footer-top-inner">
                            <ul>
                                <li>Phone <a href="tel:+121 50 3131 32">+121 50 3131 32</a></li>
                                <li>Address <a href="#">756 Torp Run Apt. 75</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="footer-bottom-inner">
                            <div class="row">
                                <div class="col-lg-5 col-md-5">
                                    <div class="footer-logo">
                                        <a href="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="footer-social">
                                        <ul>
                                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="footer-cr">
                                        <p class="mb-0">&copy;2020@StoneCanyon. All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
