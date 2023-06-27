<?php
/*
Plugin Name: Youtube fixer
Plugin URL: https://cleverstart.cz
Description: Opraví vkládání Youtube videí do WordPress
Version: 1.0
Author: Pavel Janíček
Author URI: https://cleverstart.cz
*/

add_action( 'http_api_curl', function( $curl_handle ) {
   curl_setopt( $curl_handle, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
});
