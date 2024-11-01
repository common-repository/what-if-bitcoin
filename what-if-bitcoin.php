<?php
/*
*Plugin Name: What If Bitcoin?
*Plugin URI: https://techuptodate.com.au/login-customizer-plus/
*Description: What If Bitcoin? Plugin helps you to Check how much you could have made by investing in bitcoin.
*Version: 1.2.0
*Author: TechUptodate
*Author URI:  https://techuptodate.com.au/
*Text Domain:  login-modifications
*Domain Path:  /languages
*License:     GPL3

Login Modification is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or any later version.

Login Modification is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA. Copyright 2019

*/

defined( 'ABSPATH' ) or die( "You Can't Access This File Directly." );

// Activation Hook
require_once plugin_dir_path( __FILE__ ). "includes/activate.php";
register_activation_hook( __FILE__, 'activeWhatIfPlug' );


// Deactivation Hook
require_once plugin_dir_path( __FILE__ ). "includes/deactivate.php";
register_deactivation_hook(__FILE__, 'deactiveWhatIfPlug');


// Add Admin Manu Page
require_once plugin_dir_path( __FILE__ ). "functions/admin_function.php";

// Enqueue Scripts
add_action( 'wp_enqueue_scripts', 'front_admin_scripts' );
require_once plugin_dir_path( __FILE__ ). "includes/admin_enqueue.php";

// Add Settings Function
require_once plugin_dir_path( __FILE__ ). "functions/whatif_settings.php";

// add Settings Links
add_filter( 'plugin_action_links', 'whatif_add_link', 10, 5 );
function whatif_add_link( $actions, $plugin_file ) 
{
    static $plugin;
    if (!isset($plugin))
        $plugin = plugin_basename(__FILE__);
    if ($plugin == $plugin_file) {
        $settings = array('settings' => '<a href="admin.php?page=whatif_main">' . __('Settings', 'General') . '</a>');
            $actions = array_merge($settings, $actions);
    }
    return $actions;
}

//Intitialize Front
require_once plugin_dir_path( __FILE__ ). "functions/initial_front_func.php";

//Bitcoin Shortcode
require_once plugin_dir_path( __FILE__ ). "functions/shortcode.php";

//Form Generation Code
require_once plugin_dir_path( __FILE__ ). "functions/generate_form.php";

//Form Result Generation
require_once plugin_dir_path( __FILE__ ). "functions/generate_form_result.php";
