<?php
if( ! function_exists( 'get_plugin_data' ) ) {
	require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

/**
 * Gets the site's base URL
 * 
 * @uses get_bloginfo()
 * 
 * @return string $url the site URL
 */
if( ! function_exists( 'oam_site_url' ) ) :
function oam_site_url() {
	$url = get_bloginfo( 'url' );

	return $url;
}
endif;

/**
 * Update wp_options autoload column  
 */
if ( ! function_exists( 'update_option_auto_status' ) ) :
function update_option_auto_status( $id, $status ) {
    global $wpdb;

    
    $autoload_status = $status ? 'on' : 'off';

 
    $result = $wpdb->update(
        $wpdb->prefix . 'options',
        ['autoload' => $autoload_status], 
        ['option_id' => $id],
        ['%s'], 
        ['%d']  
    );

    return $result; 
}
endif;


	   