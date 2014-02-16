<?php
/*
Plugin Name: WP Pydio Publisher
Plugin URI: http://pyd.io/
Description: Associate Pydio and WordPress users directly using WP as the master user database
Version: 1.0-alpha
Author: Charles du Jeu
Author URI: http://pyd.io/
Text Domain: wp-pydio-bridge
Domain Path: /languages

	WP Pydio Publisher
	Copyright (C) 2014  Charles du Jeu (http://pyd.io/)

	This library is free software; you can redistribute it and/or
	modify it under the terms of the GNU Lesser General Public
	License as published by the Free Software Foundation; either
	version 2.1 of the License, or (at your option) any later version.

	This library is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
	Lesser General Public License for more details.

	You should have received a copy of the GNU Lesser General Public
	License along with this library; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
*/
/**
 * @author		Charles du Jeu <charles@ajaxplorer.info>
 * @copyright	Copyright (c) 2014, Charles du Jeu
 * @license		https://www.gnu.org/licenses/lgpl-2.1.html LGPLv2.1
 * @package		Pydio\WP_Pydio_Publisher
 * @version		1.0
 */

//avoid direct calls to this file
if ( !defined( 'ABSPATH' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

/**
 * Main class to run the plugin
 *
 * @since	1.0.0
 */
class WP_Pydio_Publisher {

} // END class WP_Pydio_Publisher

/**
 * Instantiate the main class
 *
 * @since	1.0.0
 * @access	public
 *
 * @var	object	$wp_pydio_publisher holds the instantiated class {@uses WP_Pydio_Publisher}
 */
$wp_pydio_publisher = new WP_Pydio_Publisher();
