<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stonecanyon
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

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		?>


<div class="homes-intro section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="homes-intro-inner">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="homes-intro-left">
                                <h2><?php echo get_the_title(); ?></h2>
                                <div class="intro-meta">
                                    <ul>
                                        <?php 
                                        $bedroom = get_field('bedroom'); 
                                        if(!empty($bedroom)):
                                        ?>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/bed.png" alt=""> <?php echo $bedroom; ?> bedroom</li>
                                        <?php endif; 
                                        
                                        $bath = get_field('bath'); 
                                        if(!empty($bath)):
                                        ?>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/bathtub.png" alt=""> <?php echo $bath; ?> bath</li>
                                        <?php endif; 
                                        
                                        $loft = get_field('loft'); 
                                        if(!empty($loft)):
                                        ?>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/loft.png" alt=""> <?php echo $loft; ?> with loft</li>
                                        <?php endif; 
                                        
                                        $loftb = get_field('loft_bath'); 
                                        if(!empty($loftb)):
                                        ?>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/bathtub1.png" alt=""> <?php echo $loftb; ?> bath with Loft</li>
                                        <?php endif; 
                                        
                                        $bunk = get_field('bunk'); 
                                        if(!empty($bunk)):
                                        ?>
                                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/loft.png" alt=""> <?php echo $bunk; ?> bunk area and loft</li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <?php the_content(); ?>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="homes-intro-right">
                                <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="intro-gal">
                                <?php
                                // check if the repeater field has rows of data
                                if( have_rows('thumb_gallery') ): ?>
                                <ul>
                                    <?php // loop through the rows of data
                                    while ( have_rows('thumb_gallery') ) : the_row(); ?>
                                    <li><img src="<?php echo the_sub_field('thumb-image'); ?>" alt=""></li>
                                    <?php endwhile; ?>
                                </ul>
                                <?php
                                endif;
                                ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hm-gal-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="hm-gal-inner">
                    <div class="gal-header line">
                        <h2><?php the_field('gal_title'); ?></h2>
                    </div>

                    <div class="gal-box">
                        <div class="gal-s gal-col">
                            <div class="gal-si gal-col6">
                                <a href="<?php the_field('gallery_image_big_1'); ?>" data-lightbox="homegal"><img src="<?php the_field('gallery_image_big_1'); ?>" alt=""></a>
                            </div>
                            <div class="gal-si gal-col6 d-flex">
                                <div class="gal-sii gal-col6">
                                    <div class="gal-sii gal-col">
                                        <a href="<?php the_field('gallery_image_small_right_1'); ?>" data-lightbox="homegal"><img src="<?php the_field('gallery_image_small_right_1'); ?>" alt=""></a>
                                    </div>

                                    <div class="gal-sii gal-col">
                                        <a href="<?php the_field('gallery_image_small_right_2'); ?>" data-lightbox="homegal"><img src="<?php the_field('gallery_image_small_right_2'); ?>" alt=""></a>
                                    </div>
                                </div>

                                <div class="gal-sii gal-col6">
                                    <div class="gal-sii gal-col">
                                        <a href="<?php the_field('gallery_image_small_right_3'); ?>" data-lightbox="homegal"><img src="<?php the_field('gallery_image_small_right_3'); ?>" alt=""></a>
                                    </div>

                                    <div class="gal-sii gal-col">
                                        <a href="<?php the_field('gallery_image_small_right_4'); ?>" data-lightbox="homegal"><img src="<?php the_field('gallery_image_small_right_4'); ?>" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gal-s gal-col">
                            <div class="gal-si gal-col6">
                                <div class="gal-sii gal-col">
                                    <a href="<?php the_field('gallery_image_small_left_1'); ?>" data-lightbox="homegal"><img src="<?php the_field('gallery_image_small_left_1'); ?>" alt=""></a>
                                </div>

                                <div class="gal-sii gal-col">
                                    <a href="<?php the_field('gallery_image_small_left_2'); ?>" data-lightbox="homegal"><img src="<?php the_field('gallery_image_small_left_2'); ?>" alt=""></a>
                                </div>
                            </div>

                            <div class="gal-si gal-col6">
                                <a href="<?php the_field('gallery_image_big_2'); ?>" data-lightbox="homegal"><img src="<?php the_field('gallery_image_big_2'); ?>" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hm-fet-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="hm-fet-inner">
                    <div class="gal-header line">
                        <h2><?php the_field('features_title'); ?></h2>
                    </div>

                    <div class="fet-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-fet">
                                    <h4>Standard</h4>
                                    <?php the_field('standard'); ?>

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="single-fet active">
                                    <h4>Upgrades</h4>
                                    <?php the_field('upgrades'); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hm-fp-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="hm-fp-inner">

                    <div class="fet-box">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-fp-left">
                                    <div class="gal-header line">
                                        <h2><?php the_field('fp_title'); ?></h2>
                                        <p><?php the_field('fp_subtitle'); ?></p>

                                        <div class="download-btn">
                                            <a href="<?php the_field('download_file'); ?>" download>Download <img src="<?php echo get_template_directory_uri(); ?>/img/download@2x.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="single-fp-right">
                                    <img src="<?php the_field('fp_image'); ?>" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	} // end while
} // end if
?>

<?php
get_footer();
