<?php
    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

    $sideBarNotice = \WooLentor\Base::instance()::$template_info;
?>
<div class="woolentor-admin-sidebar">

    <?php
        if( isset( $sideBarNotice['notices'] ) && is_array( $sideBarNotice['notices']['sidebar'] ) ){
            if( $sideBarNotice['notices']['sidebar']['status'] == 1 ) {
                $proBannerLink = $sideBarNotice['notices']['sidebar']['link'] ? $sideBarNotice['notices']['sidebar']['link'] : '#';
                $proBannerTitle = $sideBarNotice['notices']['sidebar']['title'] ? $sideBarNotice['notices']['sidebar']['title'] : esc_html__('Promo Banner','woolentor');
                $proBannerDescription = $sideBarNotice['notices']['sidebar']['description'] ? '<p>'.$sideBarNotice['notices']['sidebar']['description'].'</p>' : '';
                $proBannerImage = $sideBarNotice['notices']['sidebar']['image'] ? '<img src='.$sideBarNotice['notices']['sidebar']['image'].' alt='.$proBannerTitle.'/>' : '';
                $banner_html = sprintf( '<div class="woolentor-promo-banner"><a href="%1$s" target="_blank">%2$s</a></div>', $proBannerLink, $proBannerImage );
                echo apply_filters( 'woolentor_sidebar_probanner', $banner_html );
            }
        }
    ?>

    <?php if( !is_plugin_active('woolentor-addons-pro/woolentor_addons_pro.php') ) :?>
        <div class="woolentor-pro-banner">
            <div class="woolentor-pro-banner-logo"><img src="<?php echo WOOLENTOR_ADDONS_PL_URL; ?>includes/admin/assets/images/logo.png" alt="<?php echo esc_attr__('Woolentor Logo','woolentor'); ?>"></div>
            <p class="woolentor-pro-banner-summary"><?php echo esc_html__('WooLentor is one of the most popular WooCommerce Elementor Addons on WordPress.org. It has been downloaded more than 1,627,298 times and 90,000 stores are using WooLentor plugin. Why not you?','woolentor'); ?></p>
            <ul class="woolentor-pro-banner-options">
                <li><?php echo esc_html__('100+ Elementor Elements','woolentor'); ?></li>
                <li><?php echo esc_html__('15 Product Custom Templates','woolentor'); ?></li>
                <li><?php echo esc_html__('10 Custom Shop Page Templates','woolentor'); ?></li>
                <li><?php echo esc_html__('Cart Page, Checkout, My Account, Registration and Thank you page custom layout template','woolentor'); ?></li>
                <li><?php echo esc_html__('5 Premium WooCommerce Themes included. (Save $200)','woolentor'); ?></li>
            </ul>
            <a href="https://woolentor.com/?utm_source=admin&utm_medium=notice&utm_campaign=free" class="woolentor-pro-banner-btn" target="_blank"><?php echo esc_html__('Get Pro Now','woolentor'); ?><span class="icon">+</span></a>
        </div>
    <?php endif; ?>

    <div class="woolentor-rating">
        <div class="woolentor-rating-icon">
            <img src="<?php echo WOOLENTOR_ADDONS_PL_URL; ?>includes/admin/assets/images/icons/rating.png" alt="<?php echo esc_attr__('Rating icon','woolentor'); ?>">
        </div>
        <div class="woolentor-rating-intro">
            <p><?php echo esc_html__('If you’re loving how our product has helped your business, please let the WordPress community know by ','woolentor'); ?><a target="_blank" href="https://wordpress.org/support/plugin/woolentor-addons/reviews/?filter=5#new-post"><?php echo esc_html__('leaving us a review on our WP repository','woolentor'); ?></a><?php echo esc_html__('. Which will motivate us a lot.','woolentor'); ?></p>
        </div>
    </div>
    <div class="woolentor-rating-trustpilot">
        <a href="https://www.trustpilot.com/review/woolentor.com" target="_blank" >
            <img src="<?php echo WOOLENTOR_ADDONS_PL_URL; ?>includes/admin/assets/images/trustpilot.png" alt="<?php echo esc_attr__('Woolentor trustpilot rating','woolentor'); ?>">
        </a>
    </div>
</div>