<?php
/**
 * The template for 404 page
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
      <div class="fourOfour-right">
        <h3> Whoops, Took a Wrong Turn...</h3>
        <p>Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.</p>
        <p>Feel free to take a look around our <span><strong>blog</strong></span> or some of our featured <span><strong>work</strong></span>.</p>
      </div>
      <div class="fourOfour-left">
         <img src="/accelerate/wp-content/uploads/2016/04/error.png" alt="404 Error Page">
      </div>
 		</div><!-- #content -->
 	</div><!-- #primary -->
 <?php get_footer(); ?>
