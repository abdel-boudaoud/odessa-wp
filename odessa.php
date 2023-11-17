<?php 

/*
 * Plugin Name:       Odessa
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Add new links to the home page.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Abdelkader Boudaoud
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
define("plugin_name", plugin_basename(__FILE__));

add_filter("plugin_action_links_". plugin_name, "add_other_links"); 



function add_other_links($links){
    
    $new_link = '<a href=""> New Link </a>';
    array_push($links, $new_link);
    return $links;
}
 
