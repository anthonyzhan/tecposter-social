<?php
/**
 * Plugin Name: TecPoster Social
 * Plugin URI: http://www.tecposter.com/tecposter-social-wordpress-plugin
 * Description: Social Plugin for facebook, twitter, linkedin
 * Version: 1.0
 * Author: Anthony Zhan
 * Author URI: http://www.tecposter.com
 * License: GPL2
 */

defined('ABSPATH') or die("No script kiddies please!");

function tecposter_social_widgets_init() {
    require_once dirname(__FILE__) . '/widgets/linkedin-profile.php';
    register_widget('Linkedin_Profile_Widget');

}

function tecposter_social_register_js() {
    wp_deregister_script('tecposter-social');
    wp_register_script('tecposter-social', plugins_url('js/tecposter-social.js', __FILE__), array(), false, true);
    //wp_enqueue_script('tecposter-social', false, array(), false, true);
    wp_enqueue_script('tecposter-social');
}

add_action('widgets_init', 'tecposter_social_widgets_init');
add_action('wp_enqueue_scripts', 'tecposter_social_register_js');


?>
