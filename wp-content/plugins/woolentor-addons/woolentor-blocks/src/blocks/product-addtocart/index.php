<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WooLentorBlocks_Product_Add_To_Cart{

	/**
     * [$_instance]
     * @var null
     */
    private static $_instance = null;

    /**
     * [instance] Initializes a singleton instance
     * @return [Actions]
     */
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

	/**
	 * The Constructor.
	 */
	public function __construct() {
		add_action( 'init', [ $this, 'init' ] );
	}

	public function init(){

		// Return early if this function does not exist.
		if ( ! function_exists( 'register_block_type' ) ) {
			return;
		}

		// Load attributes from block.json.
		ob_start();
		include WOOLENTOR_BLOCK_PATH . '/src/blocks/product-addtocart/block.json';
		$metadata = json_decode( ob_get_clean(), true );

		register_block_type(
			$metadata['name'],
			array(
				'title' 		  => $metadata['title'],
				'attributes'      => $metadata['attributes'],
				'render_callback' => [ $this, 'render_content' ]
			)
		);

	}

	public function render_content( $settings, $content ){
		
		$uniqClass 	 = 'woolentorblock-'.$settings['blockUniqId'];
		$areaClasses = array( $uniqClass, 'woolentor-product-addtocart' );

		!empty( $settings['className'] ) ? $areaClasses[] = $settings['className'] : '';

		ob_start();
		$product = wc_get_product();
		if ( empty( $product ) ) { return; }
		echo '<div class="'.implode(' ', $areaClasses ).'">';
        ?>
            <div class="<?php echo esc_attr( wc_get_product()->get_type() ); ?>">
                <?php woocommerce_template_single_add_to_cart(); ?>
            </div>
        <?php
		echo '</div>';
		return ob_get_clean();

	}

}
WooLentorBlocks_Product_Add_To_Cart::instance();