<?php
// Needed because gethostbyname( 'wordpress.org' ) returns
// a private network IP address for some reason.
add_filter( 'allowed_redirect_hosts', function( $deprecated = '' ) {
    return array(
        'wordpress.org',
        'api.wordpress.org',
        'downloads.wordpress.org',
    );
} );

// Support pretty permalinks
add_filter( 'got_url_rewrite', '__return_true' );

// Create the fonts directory if missing
if(!file_exists(WP_CONTENT_DIR . '/fonts')) {
    mkdir(WP_CONTENT_DIR . '/fonts');
}

$log_file = WP_CONTENT_DIR . '/debug.log';
define('ERROR_LOG_FILE', $log_file);
ini_set('error_log', $log_file);?>