<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// Remove additional information tab WooCommerce
add_filter( 'woocommerce_product_tabs', 'remove_info_tab', 98);
function remove_info_tab($tabs) {
 
 unset($tabs['additional_information']);
 
 return $tabs;
}
 
// Remove reviews tab WooCommerce
add_filter( 'woocommerce_product_tabs', 'remove_reviews_tab', 98);
function remove_reviews_tab($tabs) {
 
 unset($tabs['reviews']);
 
 return $tabs;
}


// Remove categories tab WooCommerce
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );


// Remove category in breadcrumb WooCommerce
function your_prefix_wc_remove_uncategorized_from_breadcrumb( $crumbs ) {
	$category 	= get_option( 'default_product_cat' );
	$caregory_link 	= get_category_link( $category );
	foreach ( $crumbs as $key => $crumb ) {
		if ( in_array( $caregory_link, $crumb ) ) {
			unset( $crumbs[ $key ] );
		}
	}
	return array_values( $crumbs );
}
add_filter( 'woocommerce_get_breadcrumb', 'your_prefix_wc_remove_uncategorized_from_breadcrumb' );


// Change url in breadcrumb WooCommerce
add_filter( 'woocommerce_breadcrumb_home_url', 'woo_custom_breadrumb_home_url' );
function woo_custom_breadrumb_home_url() {
    return 'https://sanjin-official.com/shop';
}

// Remove shop from breadcrumb WoooCommerce
add_filter( 'woocommerce_get_breadcrumb', 'remove_shop_crumb', 20, 2 );
function remove_shop_crumb( $crumbs, $breadcrumb ){
    foreach( $crumbs as $key => $crumb ){
        if( $crumb[0] === __('Shop', 'Woocommerce') ) {
            unset($crumbs[$key]);
        }
    }

    return $crumbs;
}

// Rename home to store in breadcrumb WoooCommerce
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text' );
function wcc_change_breadcrumb_home_text( $defaults ) {
	$defaults['home'] = 'Store';
	return $defaults;
}


// Remove related products WooCommerce
function iconic_remove_related_products() {
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
}
add_action( 'init', 'iconic_remove_related_products', 10 );



?>