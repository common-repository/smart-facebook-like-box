<?php
/**
* plugin name:Facebook page Like Box 
* * Version: 1.5
* Plugin URI:http://smsoftit.com
*  description:Facebook like box plugin will help you to display Facebook like box on your wesite, just add Facebook Like box widget to your sidebar and use it. 
* Author: Quazi Sazzad
* Author URI: http://smsoftit.com
* Tested up to: 5.2.2
* Layers Plugin: True
* Layers Required Version: 1.0
*License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * License: GPL2
 * Copyright 2016  quazi sazzad  (email : qsazzad21@gmail.com, skype:quazisazzad)
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
**/
?>
<?php
 
 if(!defined('ABSPATH')){
	exit;
}

  require_once(plugin_dir_path(__FILE__).'/includes/smart-fb-script.php');
  require_once(plugin_dir_path(__FILE__).'/includes/smart-fb-page-class.php');

function widget_cret(){
	register_widget('smart_fb_page_like_box');
}
add_action('widgets_init','widget_cret');

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'customize_link' );
function customize_link( $links ) {
   $links[] = '<a href="https://bit.ly/2LwYJRm">SpeedUp Website</a>';
   return $links;
}