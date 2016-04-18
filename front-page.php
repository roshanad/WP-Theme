<?php
/**
* The template for displaying the homepage
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site will use a
* different template.
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 1.0
*/

get_header();
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id( $post->ID) );
?>
<?php if( has_post_thumbnail() ) { ?>
	<section style="background: url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover;">
		<?php } else { ?>
			<section class="home-page">
				<?php } ?>

				<div class="site-content">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class='homepage-hero'>
							<?php the_content(); ?>
							<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
						</div>
					<?php endwhile; // end of the loop. ?>
				</div><!-- .site-content -->
			</section><!-- .home-page -->


			<section class="featured-work">
				<div class="site-content">
					<h4>Featured Work</h4>

					<ul class="homepage-featured-work">
						<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
						<?php while ( have_posts() ) : the_post();
						$image_1 = get_field("image_1");
						$size = "medium";
						?>
						<li class="individual-featured-work">
							<figure>
								<a class="individual-featured-work-hover" href="<?php echo $link; ?>"><?php echo wp_get_attachment_image($image_1, $size);?> </a>
							</figure>

							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</li>
					<?php endwhile; // end of the loop. ?>
					<?php wp_reset_query(); // resets the altered query back to the original ?>
				</ul>

			</div>
		</section>

		<section class="recent-posts">
			<div class="site-content">
				<div class="blog-post">
					<h4>From the Blog</h4>
					<!-- Custom Query displaying only one post on front page -->
					<?php query_posts('posts_per_page=1'); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="read-more-link">Read More <span>&rsaquo;</span></a>
					<?php endwhile; // end of the loop. ?>
					<?php wp_reset_query(); // resets the altered query back to the original ?>
				</div>
			</div>
		</section>

		<?php get_footer(); ?>
