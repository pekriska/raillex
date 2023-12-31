<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Raillex
 */

get_header();
?>

	<main id="primary" class="site-main clearfix">

    <div class="entry-content">
        <header>
            <p class="page-sub-title">— Novinky —</p>
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
		<?php
        while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div><!-- .entry-content -->
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();