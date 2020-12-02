<?php

/** GeneratePress:
 * Alternative version of the function to load templates.
 */
function gdrts__generate_do_template_part( $template, $post_type ) {
	do_action( 'generate_before_do_template_part', $template, $post_type );

	if ( apply_filters( 'generate_do_template_part', true, $template ) ) {
		if ( 'archive' === $template ) {
			get_template_part( 'content-archive', $post_type );
		}

		if ( 'single' === $template ) {
			get_template_part( 'content-single', $post_type );
		}
	}

	do_action( 'generate_after_do_template_part', $template, $post_type );
}

/** WordPress:
 * Add 'company' post type into category archives.
 */
add_filter( 'pre_get_posts', 'gdrts__pre_get_posts' );
function gdrts__pre_get_posts( $query ) {
	if ( is_category() ) {
		$query->set( 'post_type', array( 'post', 'company' ) );

		return $query;
	}
}

/** GeneratePress
 * Load 'part-company-header.php' template for company header content;
 */
add_shortcode( 'gdrts-company-header', 'gdrts__company_header' );
function gdrts__company_header() {
	ob_start();

	get_template_part( 'part', 'company-header' );

	return ob_get_clean();
}