<?php

get_header();
/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-artista' );


endwhile; // End of the loop.

get_footer();
