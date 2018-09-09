<?php get_header(); ?>
<?php

if ($_SERVER['REQUEST_URI']=="/o-servise/") {
    echo get_page_by_title("О сервисе")->post_content;?>


<?} else { ?>

<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <h1 class="title-page">Последние новости и акции из мира туризма</h1>
            <div class="posts-list">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <!-- post-mini-->
                <div class="post-wrap">
                    <div class="post-thumbnail"><?the_post_thumbnail();?></div>
                    <div class="post-content">
                        <div class="post-content__post-info">
                            <div class="post-date"><?echo get_the_date();?></div>
                        </div>
                        <div class="post-content__post-text">
                            <div class="post-title">
                                <?php the_title(); ?>
                            </div>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                        <div class="post-content__post-control"><a href="<?php the_permalink(); ?>" class="btn-read-post">Читать далее >></a></div>
                    </div>
                </div>
                <!-- post-mini_end-->

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
                <?the_posts_pagination()?>
            </div>
        </div>
<?}?>




                <!-- sidebar-->
        <div class="sidebar">
            <div class="sidebar__sidebar-item">
                <div class="sidebar-item__content">
                     <?php dynamic_sidebar('right-sidebar' );?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
