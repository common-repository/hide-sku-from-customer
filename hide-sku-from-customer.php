<?php
/*
Plugin Name:  Hide SKU From Customer
Description:  Remove SKU from Users view while still able to use for admin purposes.
Version:      1.0
Author:       sacredcactus
Author URI:   https://github.com/ipodguy79
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  Hide-SKU-From-Customer
Domain Path:  /languages
*/

function sv_remove_product_page_skus( $enabled ) {
    if ( ! is_admin() && is_product() ) {
        return false;
    }

    return $enabled;
}
add_filter( 'wc_product_sku_enabled', 'sv_remove_product_page_skus' );