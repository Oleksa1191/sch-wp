<?php
/*
Template name: About
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

<div class="about-intro section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="about-inner">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="ai-left">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img-ai.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="ai-right">
                                <p>Even though each of our owners are vastly different from one another, they all have something particularly special they share, a family centric mindset. Which was used as the foundation of Stone Canyon Homes. At Stone Canyon Homes, we understand that the value of the home is not the design or location, but the place where memories are created with your loved ones. We only use the best materials and designers when building our tiny houses, so you can rest assured that your home will last for many great memories to come.</p>

                                <p>The leading level of service we provide to our Buyers is the staple to our brand. Each of our clients is as important as the next, and we strive to deliver nothing less than world-class support from start to finish. Every tiny home is designed to capitalize on space and efficiency while adhering to the highest standards of construction, detail and design.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-middle section-padding section-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="about-middle-inner">
                    <h2>Why Choose Stone Canyon Homes as <br>Your Tiny Home Builder?</h2>

                    <div class="about-middle-detail">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="about-middle-left">
                                    <p>Here at Stone Canyon Homes, we are constantly evolving. Not only do we listen to our Buyers, we listen to the market, applying any new-found knowledge into our business practice to better serve customers. We offer a variety of floor plan packages that can fit the different needs of any Buyer.</p>

                                    <p>Each focusing on a specific aspect such as storage space, additional sleeping accommodations, additional room in the living/kitchen area and privacy. Each home is fully customizable from exterior and interior finishings and materials, to appliance upgrades.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="about-middle-right">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/img-am.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-intro section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="about-inner">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="ai-left">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img-al.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="ai-right">
                                <p>Whether this is your first time or fourth time purchasing a custom home, specifically a tiny home, we understand the process comes with great detail, even if the structure itself isn’t the normal sized home.</p>

                                <p>That being said, with smaller square footage, we as a builder have to make the most out of every square inch of space. But no fear, with the time and thought we’ve put into engineering each our tiny house floor plans and researching material that can withstand the elements and the test of time, this is our specialty! By streamlining our home building practice, we offer a stress-free process to our Buyers, so you can focus on the things that really matter.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
