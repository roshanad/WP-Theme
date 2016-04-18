<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
			<aside class="sidebar">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<?php endif; ?>

		<div class="post-author">
					<div class="avatar"><img src="/accelerate/wp-content/uploads/2016/04/roshana-1.jpg" alt=""></div>
					<div class="intro-text">I’m Roshana, the lead developer at <a href="http://roshanadevkota.com/">Accelerate</a>. This is my blog full of inspiration.</div>
				</div>

				<div class="widget widget_search-form">
					<form role="search" method="get" class="search-form" action="">
						<input type="text" class="input" placeholder="search" value="" name="s">
						<input type="button" class="input-btn" value="">
					</form>
				</div>

				<div class="widget widget_categories">
					<h3 class="widget-title">Categories</h3>
					<ul>
						<li><a href="">Books </a></li>
						<li><a href="">My Notes</a></li>
						<li><a href="">Photos</a></li>
						<li><a href="">Videos</a></li>
						<li><a href="">Quotes</a></li>
					</ul>
				</div>

				<div class="widget widget_archives">
					<h3 class="widget-title">Archives</h3>
					<ul>
						<li><a href="">April 2015</a></li>
					</ul>
				</div>

</aside>
