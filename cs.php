<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stonecanyon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="sections-wrapper cs" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/cs-bg.jpg');">
        <div class="sw-inner text-center">
            <img src="https://stonecanyonhomes.com/wp-content/uploads/2020/04/logo.png" alt="">

            <h1>Coming Soon</h1>
            <p>Our website is currently undergoing scheduled maintenance. <br>We Should be back shortly. Thank you for your patience.</p>

            <div id="countdown-3"></div>

            <div class="sf">
                <script type="text/javascript">
                    function zforms_open_window(url, height, width) {
                        var leftPos = 0;
                        var topPos = 0;
                        if (screen) {
                            leftPos = (screen.width - width) / 2;
                            topPos = (screen.height - height) / 2;
                            window.open(url, null, 'width=' + width + ',height=' + height + ',left=' + leftPos + ',top=' + topPos + ', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');
                        }
                    }

                </script>

                <a href='https://forms.zohopublic.com/stonecanyonhomes66/form/ContactForm/formperma/jTa3OKVkONQ70zVDkZH-PVE3ySx-STLhUDE89Qk0CQ4' title="Contact Us" target='_blank' onclick="zforms_open_window(this.href, 648, 700); return false">Contact Us</a>
            </div>

            <div class="site-social">
                <ul>
                    <li><a href="https://www.facebook.com/StoneCanyonHomes/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/stonecanyonhomes/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/S_C_Homes" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCunSVHyANjaCpfDjvF8WJJg" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>


    <?php wp_footer(); ?>

</body>

</html>
