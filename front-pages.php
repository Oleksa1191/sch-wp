<?php
/*
Template name: Home
*/
get_header('home'); ?>

<!-- Housetype area start -->
<div class="housetype-wrap section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="housetype-wrap-inner">

                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <?php
                         $args = array( 'posts_per_page' => -1, 'post_type'=>'homes','orderby' => 'date','order' => 'DESC' ); ?>

                        <?php $_posts = new WP_Query( $args );
                                while ( $_posts->have_posts() ) {
                                        $_posts->the_post();
                                        $id = get_the_ID();
                                    ?>

                        <a class="nav-link" id="v-pills-house<?php echo $id; ?>-tab" data-toggle="pill" href="#v-pills-house<?php echo $id; ?>" role="tab" aria-controls="v-pills-house<?php echo $id; ?>" aria-selected="true"><?php the_title(); ?></a>

                        <?php
                                }

                                ?>

                        <?php wp_reset_postdata(); ?>

                    </div>

                    <div class="tab-content" id="v-pills-tabContent">

                        <?php
                         $args2 = array( 'posts_per_page' => -1, 'post_type'=>'homes','orderby' => 'date','order' => 'DESC' ); ?>

                        <?php $_posts2 = new WP_Query( $args2 );
                                while ( $_posts2->have_posts() ) {
                                        $_posts2->the_post();
                                        $id = get_the_ID();
                                    ?>

                        <div class="tab-pane fade show" id="v-pills-house<?php echo $id; ?>" role="tabpanel" aria-labelledby="v-pills-house<?php echo $id; ?>-tab">

                            <div class="housetype">
                                <div class="housetype-thumb">
                                    <img src="<?php echo get_field('home_single_banner_image')?>" alt="">
                                    <?php // echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
                                </div>
                                <div class="housetype-detail">
                                    <h4 class="line small"><?php echo get_the_title(); ?></h4>
                                    <?php
                                                    the_excerpt();
                                                ?>

                                    <div class="read-more text-right">
                                        <a href="<?php the_permalink(); ?>">Learn More <img src="<?php echo get_template_directory_uri(); ?>/img/filled@2x.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                                }

                                ?>

                        <?php wp_reset_postdata(); ?>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Housetype area end -->

<!-- Main area start -->
<div class="main-wrap">

    <div class="your-way">
        <div class="your-way-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/img/way.jpg" alt="">
        </div>
        <div class="your-way-detail-wrap">
            <div class="container container-half">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="your-way-detail">
                            <div class="your-way-detail-inner">
                                <h2 class="sch-header line">Custom Built. <br>Your Way.</h2>
                                <p>As a tiny home builder, we believe in providing numerous options to ensure your home is suited not only to your taste, but your lifestyle. Our tiny home designs include a variety of floor plans that each have a unique feature to be set apart from the rest. We offer customizable premium options available to you - from luxury appliances to custom exterior paint, we want to ensure you will love everything about your new tiny home.</p>

                                <div class="sch-btn">
                                    <a href="<?php echo site_url(); ?>/options/">Explore Options</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="how-it-works section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="how-it-works-inner">
                        <h2 class="sch-header line text-center">How it works?</h2>

                        <div class="how-it-works-box">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/HowDoIgetOne_2-02-03-01.png" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="how-do">
        <div class="how-do-i-get-one section-padding">
            <div class="container container-half">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="how-do-i-get-detail">
                            <h2 class="sch-header line">How Do I Get One?</h2>
                            <p>If you’ve decided you’re all in for living tiny but don’t have a piece of property, we can help you with that. Our team members are in connection with numerous tiny home communities and can help you find the perfect location to live out the tiny home dream.
                                If you already have a place in mind where you would like to place your home, we can help you make that dream a reality. You can customize any of our tiny homes to your satisfaction, and we will deliver it to you!</p>

                            <div class="sch-btn">
                                <a href="">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="how-do-thumb">
            <!--<img src="<?php echo get_template_directory_uri(); ?>/img/ibg.png" alt="">-->
            <div class="how-do-thumb-inner two-col">
                <div class="hdti-big"><img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle-4.jpg" alt=""></div>
                <div class="hdti-big"><img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle-14.jpg" alt=""></div>
            </div>
            <div class="how-do-thumb-inner one-col">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Rectangle-13.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Main area end -->

<div class="testimonials-area section-padding">
    <div class="testimonials-inner">
        <div class="section-header">
            <p>Testimonials</p>
            <h2>What <br>Buyers Say</h2>
        </div>

        <div class="testimonials-box">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="t-item">
                        <p>“The product this company produces is absolutely beautiful. The relationship we’ve had with Stone Canyon Homes has been second to none. They took care of everything and made sure we had a product that was going to work best for us.”</p>
                        <div class="t-item-head">
                            <div class="t-item-head-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/oval.png" alt=""></div>
                            <div class="t-item-head-detail">
                                <h4>Gary Quigley</h4>
                                <span>Owner of Yogi Bear’s Jellystone Park in Harrisville, PA</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="t-item">
                        <p>“We use our tiny home as a vacation home where we spend almost every weekend. Our home was built extremely sturdy with the best craftsmanship we’ve seen in the industry. Anytime we talk to people looking for a tiny home, we always recommend Stone Canyon Homes.”</p>
                        <div class="t-item-head">
                            <div class="t-item-head-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/oval.png" alt=""></div>
                            <div class="t-item-head-detail">
                                <h4>Gary Quigley</h4>
                                <span>Owner of Yogi Bear’s Jellystone Park in Harrisville, PA</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="t-item">
                        <p>“I’ve been a tiny home dealer for years now, and have yet to find a home that’s comparable in terms of quality. Now that I’ve opened up my own tiny house development, I won’t allow anything but Stone Canyon Homes in my lakeside tiny home community.”</p>
                        <div class="t-item-head">
                            <div class="t-item-head-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/oval.png" alt=""></div>
                            <div class="t-item-head-detail">
                                <h4>Gary Quigley</h4>
                                <span>Owner of Yogi Bear’s Jellystone Park in Harrisville, PA</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="t-item">
                        <p>“The product this company produces is absolutely beautiful. The relationship we’ve had with Stone Canyon Homes has been second to none. They took care of everything and made sure we had a product that was going to work best for us.”</p>
                        <div class="t-item-head">
                            <div class="t-item-head-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/oval.png" alt=""></div>
                            <div class="t-item-head-detail">
                                <h4>Gary Quigley</h4>
                                <span>Owner of Yogi Bear’s Jellystone Park in Harrisville, PA</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="t-item">
                        <p>“The product this company produces is absolutely beautiful. The relationship we’ve had with Stone Canyon Homes has been second to none. They took care of everything and made sure we had a product that was going to work best for us.”</p>
                        <div class="t-item-head">
                            <div class="t-item-head-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/oval.png" alt=""></div>
                            <div class="t-item-head-detail">
                                <h4>Gary Quigley</h4>
                                <span>Owner of Yogi Bear’s Jellystone Park in Harrisville, PA</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="t-item">
                        <p>“The product this company produces is absolutely beautiful. The relationship we’ve had with Stone Canyon Homes has been second to none. They took care of everything and made sure we had a product that was going to work best for us.”</p>
                        <div class="t-item-head">
                            <div class="t-item-head-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/oval.png" alt=""></div>
                            <div class="t-item-head-detail">
                                <h4>Gary Quigley</h4>
                                <span>Owner of Yogi Bear’s Jellystone Park in Harrisville, PA</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
