<?php
 /*
 Plugin Name: WP Latest Posts Add-on
 Plugin URI: http://www.joomunited.com/wordpress-products/wp-latest-posts
 Description: Advanced frontpage and widget news slider
 Version: 3.5.1
 Author: JoomUnited 
 Author URI: http://www.joomunited.com
 License: GPL2
 */

/**
 * @copyright 2014  JoomUnited ( email : support _at_ wpcode-united.com )
 *
 *  Original development of this plugin was kindly funded by WPCode United
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/** Class includes **/
include_once( dirname( __FILE__ ) . '/inc/yd-widget-framework.inc.php' );	// standard framework VERSION 20110405-01 or better
include_once( dirname( __FILE__ ) . '/inc/wp-fpn-pro-main.inc.php' );		// custom classes

/**
 * 
 * Just fill up necessary settings in the configuration array
 * to create a new custom plugin instance...
 * 
 */
global $wpcu_wpfn_p;
$wpcu_wpfn_p = new wpcuWPFnProPlugin(
	array(
		'name' 				=> 'WP Frontpage News Pro AddOn',
		'version'			=> '3.5.1',
		'has_option_page'	=> false,
		'option_page_title' => '',
		'op_donate_block'	=> false,
		'op_credit_block'	=> false,
		'op_support_block'	=> false,
		'has_toplevel_menu'	=> false,
		'has_shortcode'		=> false,
		'shortcode'			=> '',
		'has_widget'		=> false,
		'widget_class'		=> '',
		'has_cron'			=> false,
		'crontab'			=> array(),
		'has_stylesheet'	=> false,
		'stylesheet_file'	=> 'css/wpcufpnp.css',
		'has_translation'	=> false,
		'translation_domain'=> 'wpcufpn', // must be copied in the widget class!!!
		'translations'		=> array(
			array( 'English',	'WPCode United', 'http://www.wpcode-united.com/' ),
			array( 'French',	'WPCode United', 'http://www.wpcode-united.com/' ),
		),		
		'initial_funding'	=> array( 'WPCode United', 'www.wpcode-united.com' ),
		'additional_funding'=> array(),
		'form_blocks'		=> array(
			'Main options' => array( 
			)
		),
		'option_field_labels'=>array(
		),
		'option_defaults'	=> array(
		),
		'form_add_actions'	=> array(
		),
		'has_cache'			=> false,
		'option_page_text'	=> '',
		'backlinkware_text' => '',
		'plugin_file'		=> __FILE__,
		'has_activation_notice'	=> false,
		'activation_notice' => '',
		'form_method'		=> 'post'
 	)
);
if(is_admin()){
	//config section        
	if(!defined('JU_BASE')){
		define( 'JU_BASE', 'https://www.joomunited.com/' );
	}
	
	$remote_updateinfo =   JU_BASE.'juupdater_files/wp-latest-posts-addon.json';
	 //end config
	
	require 'juupdater/juupdater.php';
	$UpdateChecker = Jufactory::buildUpdateChecker(
		   $remote_updateinfo,
			__FILE__
	);

}
?>