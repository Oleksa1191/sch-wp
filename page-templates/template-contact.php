<?php
/*
Template name: Contact
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

<div class="contact-wrap section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="contact-wrap-inner">
                    <div class="section-header text-center">
                        <h2 class="header">GET IN TOUCH</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="contact-f">
                                <p>Leave us a messege</p>
                                <label for="name">
                                    <input id="name" type="text" name="name" placeholder="Name">
                                </label>
                                <label for="email">
                                    <input id="email" type="text" name="email" placeholder="Email">
                                </label>
                                <label for="">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message here"></textarea>
                                </label>
                                <input type="submit" value="Send" name="send">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="contact-a">
                                <h6>Contact Info</h6>
                                <ul class="address">
                                    <li class="location">
                                        <a href="">11061 AL-129 <br>Brilliant, AL 35548</a>
                                    </li>
                                    <li class="phone"><a href="tel:(866)-978-4272">(866)-978-4272</a></li>
                                    <li class="email"><a href="mailto:info@stonecanyonhomes.com">info@stonecanyonhomes.com</a></li>
                                </ul>

                                <div class="site-social">
                                    <ul>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="map">
                        <?php echo do_shortcode('[wpgmza id="1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
