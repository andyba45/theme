<?php

/* Template Name: Blog Home */


get_header(); ?>
<div class="row">
  <div class="span8">

				<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>


				<?php $temp_query = $wp_query; ?>  
				<?php query_posts('category_name=&showposts=5'); ?>  

				<?php while (have_posts()) : the_post(); ?>  

				<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>  

				<?php the_excerpt(); ?>  


<?php endwhile; ?>  

  </div>
<div class="span4">
<?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
