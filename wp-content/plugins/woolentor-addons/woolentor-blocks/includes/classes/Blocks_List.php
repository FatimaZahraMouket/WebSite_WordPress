<?php
namespace WooLentorBlocks;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Manage Blocks
 */
class Blocks_List {
    
    /**
     * Block List
     *
     * @return Array
     */
    public static function get_block_list(){

        $blockList = [

            'brand_logo' => [
                'label'  => __('Brand Logo','woolentor'),
                'name'   => 'woolentor/brand-logo',
                'type'   => 'common',
                'active' => true,
            ],
            'category_grid' => [
                'label'  => __('Category Grid','woolentor'),
                'name'   => 'woolentor/category-grid',
                'type'   => 'common',
                'active' => true,
            ],
            'image_marker' => [
                'label'  => __('Image Marker','woolentor'),
                'name'   => 'woolentor/image-marker',
                'type'   => 'common',
                'active' => true,
            ],
            'special_day_offer' => [
                'label'  => __('Special Day Offer','woolentor'),
                'name'   => 'woolentor/special-day-offer',
                'type'   => 'common',
                'active' => true,
            ],
            'store_feature' => [
                'label'  => __('Store Feature','woolentor'),
                'name'   => 'woolentor/store-feature',
                'type'   => 'common',
                'active' => true,
            ],
            'product_tab' => [
                'label'  => __('Product tab','woolentor'),
                'name'   => 'woolentor/product-tab',
                'type'   => 'common',
                'active' => true,
            ],
            'promo_banner' => [
                'label'  => __('Promo Banner','woolentor'),
                'name'   => 'woolentor/promo-banner',
                'type'   => 'common',
                'active' => true,
            ],
            'faq' => [
                'label'  => __('FAQ','woolentor'),
                'name'   => 'woolentor/faq',
                'type'   => 'common',
                'active' => true,
            ],
            'product_curvy' => [
                'label'  => __('Product Curvy','woolentor'),
                'name'   => 'woolentor/product-curvy',
                'type'   => 'common',
                'active' => true,
            ],
            'archive_title' => [
                'label'  => __('Archive Title','woolentor'),
                'name'   => 'woolentor/archive-title',
                'type'   => 'common',
                'active' => true,
            ],
            'breadcrumbs' => [
                'label'  => __('Breadcrumbs','woolentor'),
                'name'   => 'woolentor/breadcrumbs',
                'type'   => 'common',
                'active' => true,
            ],

            'product_title' => [
                'label'  => __('Product Title','woolentor'),
                'name'   => 'woolentor/product-title',
                'type'   => 'single',
                'active' => true,
            ],
            'product_price' => [
                'label'  => __('Product Price','woolentor'),
                'name'   => 'woolentor/product-price',
                'type'   => 'single',
                'active' => true,
            ],
            'product_addtocart' => [
                'label'  => __('Product Add To Cart','woolentor'),
                'name'   => 'woolentor/product-addtocart',
                'type'   => 'single',
                'active' => true,
            ],
            'product_short_description' => [
                'label'  => __('Product Short Description','woolentor'),
                'name'   => 'woolentor/product-short-description',
                'type'   => 'single',
                'active' => true,
            ],
            'product_description' => [
                'label'  => __('Product Description','woolentor'),
                'name'   => 'woolentor/product-description',
                'type'   => 'single',
                'active' => true,
            ],
            'product_rating' => [
                'label'  => __('Product Rating','woolentor'),
                'name'   => 'woolentor/product-rating',
                'type'   => 'single',
                'active' => true,
            ],
            'product_image' => [
                'label'  => __('Product Image','woolentor'),
                'name'   => 'woolentor/product-image',
                'type'   => 'single',
                'active' => true,
            ],
            'product_meta' => [
                'label'  => __('Product Meta','woolentor'),
                'name'   => 'woolentor/product-meta',
                'type'   => 'single',
                'active' => true,
            ],
            'product_additional_info' => [
                'label'  => __('Product Additional Info','woolentor'),
                'name'   => 'woolentor/product-additional-info',
                'type'   => 'single',
                'active' => true,
            ],
            'product_tabs' => [
                'label'  => __('Product Tabs','woolentor'),
                'name'   => 'woolentor/product-tabs',
                'type'   => 'single',
                'active' => true,
            ],
            'product_stock' => [
                'label'  => __('Product Stock','woolentor'),
                'name'   => 'woolentor/product-stock',
                'type'   => 'single',
                'active' => true,
            ],
            'product_qrcode' => [
                'label'  => __('Product QR Code','woolentor'),
                'name'   => 'woolentor/product-qrcode',
                'type'   => 'single',
                'active' => true,
            ],
            'product_related' => [
                'label'  => __('Product Related','woolentor'),
                'name'   => 'woolentor/product-related',
                'type'   => 'single',
                'active' => true,
            ],
            'product_upsell' => [
                'label'  => __('Product Upsell','woolentor'),
                'name'   => 'woolentor/product-upsell',
                'type'   => 'single',
                'active' => true,
            ],

            'shop_archive_product' => [
                'title'  => __('Archive Layout Default','woolentor'),
                'name'   => 'woolentor/shop-archive-default',
                'type'   => 'shop',
                'active' => true,
            ]
            
        ];

        return apply_filters( 'woolentor_block_list', $blockList );
        
    }


}
