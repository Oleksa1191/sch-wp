<?php
/*
Template name: Purchase
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
                        <h2 class="header">Factory Direct <br>Stores</h2>
                    </div>

                    <div class="map">
                        <?php echo do_shortcode('[wpgmza id="1"]'); ?>
                    </div>

                    <div class="purchase-box">
                        <div class="s-purchase">
                            <h6>Stone Canyon Homes - Factory <br>Direct Store</h6>
                            <ul>
                                <li class="location"><a href="">2818 W. Martin Luther King Blvd. Fayetteville, AR 72701</a></li>
                            </ul>
                            <div class="sch-btn">
                                <a href="#">Contact</a>
                            </div>
                        </div>

                        <div class="s-purchase">
                            <h6>Stone Canyon Homes - Factory <br>Direct Store</h6>
                            <ul>
                                <li class="location"><a href="">2790 Bella Vista Way Bella Vista, AR 72714</a></li>
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
