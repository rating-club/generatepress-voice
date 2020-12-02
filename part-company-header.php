<div class="gdrts-company-header">
    <div class="company-logo">
		<?php the_post_thumbnail( 'medium', $attrs = array( 'itemprop' => 'image' ) ); ?>
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
					'style_size'         => 52,
					'template'           => 'default',
					'rating'             => 'average'
				)
			);

			?>
        </div>
    </div>
</div>