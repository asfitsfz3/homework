<?php get_header(); ?>
<?php

if ($_SERVER['REQUEST_URI']=="/o-servise/") {
    echo get_page_by_title("О сервисе")->post_content;
} else {      ?>

<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <h1 class="title-page">Последние новости и акции из мира туризма</h1>
            <div class="posts-list">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <!-- post-mini-->
                <div class="post-wrap">
                    <div class="post-thumbnail"><img src="img/post_thumb/thumb_1.jpg" alt="Image поста" class="post-thumbnail__image"></div>
                    <div class="post-content">
                        <div class="post-content__post-info">
                            <div class="post-date">29.07.2016</div>
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
<?}?>


            </div>
            <div class="pagenavi-post-wrap"><a href="#" class="pagenavi-post__prev-postlink"><i class="icon icon-angle-double-left"></i></a><span class="pagenavi-post__current">1</span><a href="#" class="pagenavi-post__page">2</a><a href="#" class="pagenavi-post__page">3</a><a href="#" class="pagenavi-post__page">...</a><a href="#" class="pagenavi-post__page">10</a><a href="#" class="pagenavi-post__next-postlink"><i class="icon icon-angle-double-right"></i></a></div>
        </div>

                <!-- sidebar-->
        <div class="sidebar">
            <?php dynamic_sidebar('right-sidebar' );?>
        </div>

<?php get_footer(); ?>
