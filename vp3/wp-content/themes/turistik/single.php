<?php get_header(); ?>

    <!-- sidebar-->



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_title(); ?><br>
<?php the_content(); ?>
<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


    <div class="sidebar">
        <?php dynamic_sidebar('right-sidebar' );?>
    </div>

<?php get_footer(); ?>