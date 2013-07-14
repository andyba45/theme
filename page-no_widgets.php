<?php
/*
Template Name: Hosting Page
*/	

get_header(); ?>

<div class="row">
  <div class="span8">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	  	<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

  </div>
  <div class="span4">
      
      <img src="./wp-content/uploads/2013/07/money-back-brn.jpg" class="lab_img_center" >
      <img src="./wp-content/uploads/2013/07/wordpress-brn.jpg" class="lab_img_center" >
      <img src="./wp-content/uploads/2013/07/paypal.jpg" class="lab_img_center" >

  </div>
</div>

<?php get_footer(); ?>
