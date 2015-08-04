<?php
# WP SUPER CACHE 1.2
function wpcache_broken_message() {
	global $wp_cache_config_file;
	if ( isset( $wp_cache_config_file ) == false )
		return '';

	if ( false == strpos( $_SERVER[ 'REQUEST_URI' ], 'wp-admin' ) )
		echo "<!-- WP Super Cache is installed but broken. The constant WPCACHEHOME must be set in the file wp-config.php and point at the WP Super Cache plugin directory. -->";
}

if ( false == defined( '/var/www/html/wp-content/plugins/wp-super-cache/' ) ) {
	define( 'ADVANCEDCACHEPROBLEM', 1 );
} elseif ( !include_once( /var/www/html/wp-content/plugins/wp-super-cache/ . 'wp-cache-phase1.php' ) ) {
	if ( !@is_file( /var/www/html/wp-content/plugins/wp-super-cache/ . 'wp-cache-phase1.php' ) ) {
		define( 'ADVANCEDCACHEPROBLEM', 1 );
	}
}
if ( defined( 'ADVANCEDCACHEPROBLEM' ) )
	register_shutdown_function( 'wpcache_broken_message' );
?>
