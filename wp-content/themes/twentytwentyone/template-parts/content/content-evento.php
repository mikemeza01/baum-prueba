<?php

$imagen_fondo = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class=" container">
        <div class="row">
            <div class="col-md-6">
                <strong>Nombre: </strong><?php echo get_field('nombre_evento');?>
                <br><strong>Descripción: </strong><?php echo get_field('descripcion_evento');?>
                <br><strong>Fecha: </strong><?php echo get_field('fecha_evento');?>
                <br><strong>Hora Inicio: </strong><?php echo get_field('hora_inicio_evento');?>
                <br><strong>Hora Finalización: </strong><?php echo get_field('hora_finalizacion_evento');?>
                <br><strong>Festival: </strong><?php

                $festival = get_field('evento_festival');
                echo esc_html($festival->post_title);
                
                ?>
            </div>

            <div class="col-md-6">
                <strong><h5>Artista: </h5></strong>
                <?php
                    $artista = get_field('evento_artista');
                    echo "<strong>Nombre: </strong>".esc_html($artista->post_title);
                    echo "<br><strong>Email: </strong>".get_field('email_artista', $artista->ID );
                    echo "<br><strong>Telefono: </strong>".get_field('telefono_artista', $artista->ID);
                    echo "<br><strong>Información Adicional: </strong>".get_field('informacion_adicional_artista', $artista->ID);

                ?>
            
            </div>  
        </div>
        <div class="row">
            <?php
                


            ?>
        
            
        </div>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author-bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
