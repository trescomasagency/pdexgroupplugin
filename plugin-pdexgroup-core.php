<?php

/*
 * Plugin Name:       Pdex Group
 * Plugin URI:        #
 * Description:       Activa las Features del Theme pdexgroup
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Diego Castro
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       pdexgroup
 */

define("PDEX_DIR_PATH", plugin_dir_path(__FILE__));
define("PDEX_DIR_URL", plugin_dir_url(__FILE__));

include_once PDEX_DIR_PATH . '/public/shortcode/panel-añadir-producto.php';