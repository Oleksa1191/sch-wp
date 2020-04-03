<?php
/*
Template name: Blog
*/
get_header(); 
$bannerimage = get_field('page_banner');

?>


<div class="inner-banner-wrap" style="background-image: url('<?php if(!empty($bannerimage)){ echo $bannerimage; }else{ echo 'https://stonecanyonhomes.com/wp-content/uploads/2020/04/slider.jpg'; }; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="inner-banner-inner">
                    <div class="inner-banner">
                        <h1 class="mb-0">Blog</h1>
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
                    <div class="row post-container">

                        <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?>
                        <div class="col-lg-4 col-md-4 post">
                            <div class="s-home s-blog">
                                <div class="home-thumb">
                                    <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
                                </div>
                                <div class="home-header">
                                    <div class="hh-top">
                                        <span>11 min read</span>
                                    </div>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div>
                            </div>
                        </div>

                        <?php
	} // end while
} // end if
?>



                        <!--<div class="view-more">
    <a href="#">View More <i class="fa fa-angle-down"></i></a>
</div>-->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
