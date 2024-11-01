<?php
/**
 * Plugin Name: WP Login Logo Changer
 * Plugin URI: https://AhmadAwais.com/
 * Description: Changes login logo by uploading it in the theme's folder.
 * Version: 1.2.0
 * Author: TheDevCouple (Maedah & Awais)
 * Author URI: https://MaedahBatool.com/
 */

/**
 * Worst possible way to add a login logo.
 *
 * @since 1.0.0
 * @todo Make it upload-able via Customizer.
 */
function wpc_custom_login_logo() {
	echo '<style type="text/css">
        h1 a { background-image:url(' . get_bloginfo( 'template_directory' ) . '/images/login_logo.png) !important; }
    </style>';
}
// Hook.
add_action( 'login_head', 'wpc_custom_login_logo' );
