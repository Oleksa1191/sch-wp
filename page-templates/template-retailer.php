<?php
/*
Template name: Find a retailer
*/
get_header(); 
$bannerimage = get_field('page_banner');
?>

<div class="inner-banner-wrap" style="background-image: url('<?php if(!empty($bannerimage)){ echo $bannerimage; }else{ echo get_template_directory_uri().'/img/slider.png'; }; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="inner-banner-inner">
                    <div class="inner-banner">
                        <h1 class="mb-0"><?php echo get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-wrap purchase-wrap section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="contact-wrap-inner">
                    <div class="section-header text-left">
                        <h2 class="header">Find a Retailer <br>Near You</h2>
                    </div>

                    <div class="map">
                        <?php echo do_shortcode('[wpgmza id="2"]'); ?>
                    </div>

                    <div class="purchase-box">
                        <div class="s-purchase">
                            <h6>Emerald Homes</h6>
                            <ul>
                                <li class="location"><a href="">24950 Hwy. 59 Loxley, AL 36551</a></li>
                                <li class="phone"><a href="tel:251-947-2311">251-947-2311</a></li>
                            </ul>
                            <div class="sch-btn">
                                <a href="#">Contact</a>
                            </div>
                        </div>

                        <div class="s-purchase">
                            <h6>Upstate Tiny Homes</h6>
                            <ul>
                                <li class="location"><a href="">805 Holbrook Rd. Troy, NY 12180</a></li>
                                <li class="phone"><a href="tel:518-326-9575">518-326-9575</a></li>
                            </ul>
                            <div class="sch-btn">
                                <a href="#">Contact</a>
                            </div>
                        </div>

                        <div class="s-purchase">
                            <h6>Compact Cottages</h6>
                            <ul>
                                <li class="location"><a href="">3049 Georgia Rd. Franklin, NC 28734</a></li>
                                <li class="phone"><a href="tel:828-634-0077">828-634-0077</a></li>
                            </ul>
                            <div class="sch-btn">
                                <a href="#">Contact</a>
                            </div>
                        </div>

                        <div class="s-purchase">
                            <h6>Southern Hills Tiny Homes</h6>
                            <ul>
                                <li class="location"><a href="">547 Highway 78 Monroe, GA 30656</a></li>
                                <li class="phone"><a href="tel:770-314-2957">770-314-2957</a></li>
                            </ul>
                            <div class="sch-btn">
                                <a href="#">Contact</a>
                            </div>
                        </div>

                        <div class="s-purchase adjust-height">
                            <h6>Stone Canyon Cabins of the Smoky Mountains</h6>
                            <ul>
                                <li class="location"><a href="">3121 Wears Valley Rd Sevierville, TN 37862</a></li>
                                <li class="phone"><a href="tel:706-955-6401">706-955-6401</a></li>
                            </ul>
                            <div class="sch-btn">
                                <a href="#">Contact</a>
                            </div>
                        </div>

                        <div class="s-purchase">
                            <h6>Stone Canyon Cabins of the Smoky Mountains</h6>
                            <ul>
                                <li class="location"><a href="">3121 Wears Valley Rd Sevierville, TN 37862</a></li>
                                <li class="phone"><a href="tel:706-955-6401">706-955-6401</a></li>
                                <li class="email"><a href="mailto:jbowie@rfsemail.com">jbowie@rfsemail.com</a></li>
                            </ul>
                            <div class="sch-btn">
                                <a href="#">Contact</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
