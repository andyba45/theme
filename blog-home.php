<?php
/* Template Name: Blog Home */


get_header();
?>
<div class="row">
    <div class="span8">


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile;
        else:
            ?>

            <p><?php _e('Sorry, this page does not exist.'); ?></p>

        <?php endif; ?>

        <?php $temp_query = $wp_query; ?>  

        <?php query_posts('category_name=&showposts=20'); ?>  

<?php while (have_posts()) : the_post(); ?>  

            <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>  

    <?php the_excerpt(); ?> 

            <span class="badge badge-success">Posted: <?php the_time('l, F jS, Y'); ?></span>

            <hr />


<?php endwhile; ?>  

    </div>
    <div class="span4">
<?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
