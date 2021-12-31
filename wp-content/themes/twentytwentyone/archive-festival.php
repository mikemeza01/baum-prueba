<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();

$args = array(
    'post_type' => 'festival',
    'post_status' => 'publish'
);
$query = new WP_Query( $args );
?>



<?php if ( $query->have_posts() ) : ?>

	<header class="page-header alignwide">
        
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		<?php if ( $description ) : ?>
			<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
	</header><!-- .page-header -->

    <div class="container festivales">
        <?php while ( $query->have_posts() ) : ?>
            <div class="col-sm-4">
                <?php 
                
                    $query->the_post();
                    $logo = get_field('logo_festival');

                    //echo $post_id;
                    the_title( sprintf( '<h3 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' );
                    //echo get_field('descripcion_festival');
                    echo '<a href=" '.get_permalink().' "><img src="' . esc_url($logo['url']) . '"></a>';
                ?>
            </div>
        <?php endwhile; ?>
    </div>
	<?php twenty_twenty_one_the_posts_navigation(); ?>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
