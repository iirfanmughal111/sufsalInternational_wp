<?php

function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; 
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css?v='.time());
   /* wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );*/
	   wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css?v='.time(),
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// add_filter( 'http_request_args', function ( $args ) {

//     $args['reject_unsafe_urls'] = false; //avoid to check ssl
    
//     return $args;
// }, 999 );
/*Custom js*/

function my_custom_scripts() {
    wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/js/custom.js?v='.time(), array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );

// add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

// function enqueue_parent_styles() {
//    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
// }

// CustomFunctionsForPrice
// 
add_filter('woocommerce_get_price_html','hidePriceFunction');
function hidePriceFunction($price){
// 	if ( is_admin() ) return $price;
	return $price = "";
	
}
// add_filter( ‘woocommerce_get_price_html’, function( $price ) {
// if ( is_admin() ) return $price;
// return ”;
// } );
// add_filter( ‘woocommerce_cart_item_price’, ‘__return_false’ );
// add_filter( ‘woocommerce_cart_item_subtotal’, ‘__return_false’ );
// 
// Hiding Cart Totals tab On cart page
add_action( 'woocommerce_cart_collaterals', 'remove_cart_totals', 9 );
function remove_cart_totals(){
    // Remove cart totals block
    remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cart_totals', 10 );

    // Add back "Proceed to checkout" button (and hooks)
    echo '<div class="cart_totals">';
    do_action( 'woocommerce_before_cart_totals' );

    echo '<div class="wc-proceed-to-checkout">';
    do_action( 'woocommerce_proceed_to_checkout' );
    echo '</div>';

    do_action( 'woocommerce_after_cart_totals' );
    echo '</div><br clear="all">';
}


// Hiding Cart Totals tab On checkout page
// add_action( 'woocommerce_checkout_order_review', 'remove_checkout_totals', 1 );
// function remove_checkout_totals(){
//     // Remove cart totals block
//     remove_action( 'woocommerce_checkout_order_review', 'woocommerce_order_review', 10 );
// }
// 
// // Removes Order Notes Title

add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );

// Remove Order Notes Field

add_filter( 'woocommerce_checkout_fields' , 'njengah_order_notes' );

function njengah_order_notes( $fields ) {

unset($fields['order']['order_comments']);

return $fields;
}

/**
 * @snippet       Change "Place Order" Button text @ WooCommerce Checkout
 * @author        Muhammad Irfan
 */
add_filter( 'woocommerce_order_button_text', 'replacePlacedOrderText' );
 
function replacePlacedOrderText( $button_text ) {
	return 'Send Inquiry'; // new text is here 
}

// RemoveOrderDetailsOnCheckoutPage
// 
// remove_action( 'woocommerce_checkout_order_review', 'woocommerce_order_review', 10 );
// 
remove_action( 'woocommerce_cart_is_empty', 'wc_empty_cart_message', 10 );
add_action( 'woocommerce_cart_is_empty', 'custom_empty_cart_message', 10 );

function custom_empty_cart_message() {
    $html  = '<div class="col-12 offset-md-1 col-md-10"><img src="http://localhost/own/sufsalInternationalwp-content/uploads/2022/12/empty-cart.webp"><h1 class="cart-empty">';
    $html .= wp_kses_post( apply_filters( 'wc_empty_cart_message', __( 'YOUR INQUIRY BASKET IS EMPTY !!! </h1><p>We warmly welcome you to familiarize yourself with our collection of <a href="htpp://localhost/our-products/">products</a>. You will undoubtedly discover anything for yourself.</p>', 'woocommerce' ) ) );
    echo $html . '</div>';
}



/*WhatsappCodeFunction*/

function WhatsappCodeFunction() { 

    
 		$html = '';
 $html .= '<script src="htpp://apps.elfsight.com/p/platform.js" defer></script>';
 $html .= '<div class="elfsight-app-7d641016-1d26-4388-bbe8-2b08ddc3d2a3"></div>';

 
return $html; 
 
} 
// Add a shortcode so that we can use it in widgets, posts, and pages
add_shortcode('WhatsappCode', 'WhatsappCodeFunction');