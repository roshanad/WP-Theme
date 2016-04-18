<?php
/**
 * The template for displaying all services
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			<div class="row">
				<div class="col-3">
					<h4>Content Strategy</h4>
				</div>
				<div class="col-2-3">
					<p>Praesent facilisis massa justo, ultricies pulvinar justo euismod ac. Praesent vel mauris ante. Ut tempor lacus a imperdiet auctor. Phasellus gravida nulla non justo euismod, id pellentesque sapien malesuada. sed diam ac lorem bibendum imperdiet. Donec purus ante, tincidunt non tincidunt sed, venenatis quis dolor.</p>
				</div>
			<div class="col-1-3">
			<img src="/accelerate/wp-content/uploads/2016/04/content1.png" alt="Content Strategy Thumnail">
		</div>

			</div>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>
