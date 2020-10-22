<?php
/*
Plugin Name: Get-IP
Plugin URI: https://github.com/miit0o/get-ip
Description: A simple plugin to enable showing the current users IP address. You can use the shortcode [show_ip] to view the users IP address on any page.
Version: 0.1
Requires at least: 4.8
Tested up to: 5.5
Requires PHP: 5.6
Author: miit0o
Author URI: https://rustige.me
License: MIT

Copyright (c) 2020 Christoph Rustige. All rights reserved.
*/

function get_ip() {
	if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
	    $ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
	    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
	    $ip = $_SERVER['REMOTE_ADDR'];
	}
	    return apply_filters( 'wpb_get_ip', $ip );
	}

	add_shortcode('show_ip', 'get_ip');

?>