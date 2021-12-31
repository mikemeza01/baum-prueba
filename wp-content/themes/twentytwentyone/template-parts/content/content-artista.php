<?php

$imagen_fondo = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content container">
        <div class="row">
            <div class="col-md-12">
                <strong>Nombre: </strong><?php echo get_field('nombre_artista');?>
                <br><strong>Email: </strong><?php echo get_field('email_artista');?>
                <br><strong>Telefono: </strong><?php echo get_field('telefono_artista');?>
                <br><strong>Información Adicional: </strong><?php echo get_field('informacion_adicional_artista');?>
               
            </div>
        </div>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
