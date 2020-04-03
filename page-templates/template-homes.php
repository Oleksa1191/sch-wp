<?php
/*
Template name: Homes template
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

<div class="homes-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="homes-inner">
                    <div class="row">

                        <?php
                         $args = array( 'posts_per_page' => -1, 'post_type'=>'homes','orderby' => 'date','order' => 'DESC'  ); ?>

                        <?php $_posts = new WP_Query( $args );
                                while ( $_posts->have_posts() ) {
                                        $_posts->the_post();
                                    ?>

                        <div class="col-lg-6 col-md-6 hp">
                            <div class="s-home">
                                <div class="home-thumb">
                                    <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
                                </div>
                                <div class="home-header">
                                    <div class="hh-top">
                                        <span>Type</span>
                                        <span><a href="<?php the_permalink(); ?>">View detail <img src="<?php echo get_template_directory_uri(); ?>/img/filled.png" alt=""></a></span>
                                    </div>
                                    <h2><?php the_title(); ?></h2>
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

<?php get_footer(); ?>
