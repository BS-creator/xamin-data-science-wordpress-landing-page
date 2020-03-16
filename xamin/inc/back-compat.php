<?php
/**
 * xamin back compat functionality
 *
 * Prevents xamin from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage xamin
 * @since xamin 1.0
 */

/**
 * Prevent switching to xamin on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since xamin 1.0
 */
function xamin_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'xamin_upgrade_notice' );
}
add_action( 'after_switch_theme', 'xamin_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * xamin on WordPress versions prior to 4.7.
 *
 * @since xamin 1.0
 *
 * @global string $wp_version WordPress version.
 */
function xamin_upgrade_notice() {
	$message = sprintf( esc_html_e( 'xamin requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'xamin' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since xamin 1.0
 *
 * @global string $wp_version WordPress version.
 */
function xamin_customize() {
	wp_die( sprintf( esc_html_e( 'xamin requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'xamin' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'xamin_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since xamin 1.0
 *
 * @global string $wp_version WordPress version.
 */
function xamin_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( esc_html_e( 'xamin requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'xamin' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'xamin_preview' );
?>