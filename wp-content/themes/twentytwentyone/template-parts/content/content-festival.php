<?php

$imagen_fondo = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="encabezado-fondo" style="background: url('<?php echo $imagen_fondo[0]; ?>');">
		<?php 
            echo '<div class="container">';
                the_title( '<h1 class="entry-title">', '</h1>' );
            echo '</div>'; 
        ?>
	</header><!-- .entry-header -->

	<div class=" container">
        <div class="row">
            <div class="col-md-6">
                <strong>Nombre: </strong><?php echo get_field('nombre_festival');?>
                <br><strong>Descripción: </strong><?php echo get_field('descripcion_festival');?>
                <br><strong>Ubicación: </strong><?php echo get_field('ubicacion_festival');?>
                <br><strong>Fecha Inicio: </strong><?php echo get_field('fecha_inicio_festival');?>
                <br><strong>Fecha Finalización: </strong><?php echo get_field('fecha_de_finalizacion_festival');?>
            
            </div>

            <div class="col-md-6">
                
                <?php
                    $logo = get_field('logo_festival');
                    echo '<img src="' . esc_url($logo['url']) . '">';
                ?>
            
            </div>  
        </div>
        <div class="row">
            <?php
                $post_id = get_the_ID();
                $args = array(
                    'post_type' => 'evento',
                    'post_status' => 'publish',
                    'meta_key' => 'evento_festival',
                    'meta_value' => $post_id
                );
                $query = new WP_Query( $args );
                while ( $query->have_posts() ) : ?>
                    <div class="col-sm-4">
                        <?php 
                        
                            $query->the_post();
                            
        
                            //echo $post_id;
                            the_title( sprintf( '<h3 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' );
                            //echo get_field('descripcion_festival');
                            echo get_field('nombre_evento');
                            echo '<br>';
                            echo get_field('descripcion_evento');
                        ?>
                    </div>
                <?php endwhile; 


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
