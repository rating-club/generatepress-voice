<?php
/**
 * The template for displaying posts within the loop.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'gdrts-post-type-archive' ); ?> <?php generate_do_microdata( 'article' ); ?>>
    <div class="inside-article">
        <div class="featured-image">
            <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( 'medium', $attrs = array( 'itemprop' => 'image' ) ); ?></a>
        </div>
        <div class="company-information">
            <header class="entry-header">
				<?php

				$params = generate_get_the_title_parameters();

				the_title( $params['before'], $params['after'] );

				?>
            </header>
            <div class="company-rating">
				<?php

				gdrts_posts_render_rating(
					array(
						'echo'   => true,
						'method' => 'stars-rating'
					),
					array(
						'font_color_current' => '#dd3333',
						'disable_rating'     => true,
						'style_size'         => 24,
						'template'           => 'default',
						'rating'             => 'average'
					)
				);

				?>
            </div>
            <div class="company-categories">
				<?php the_category( ' &middot; ' ); ?>
            </div>
        </div>
    </div>
</article>
