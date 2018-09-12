<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content">
                <div class="article-title title-page">
                    <?php the_title(); ?>
                </div>
                <div class="article-image"><?the_post_thumbnail();?></div>
                <div class="article-info">
                    <div class="post-date"><?the_date();?></div>
                </div>
                <div class="article-text">
                    <?php the_content(); ?>
                </div>
                <?
                $next_post = get_adjacent_post(0, '', 0);
                $prev_post = get_adjacent_post();
                ?>
                <div class="article-pagination">
                    <?if ($prev_post->post_title!=null) {?>
                    <div class="article-pagination__block pagination-prev-left"><a href="<?echo get_permalink($prev_post->ID);?>" class="article-pagination__link"><i class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                        <div class="wrap-pagination-preview pagination-prev-left">
                            <div class="preview-article__img"><img src="<?echo get_the_post_thumbnail_url($prev_post->ID);?>" class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="<?echo get_permalink($prev_post->ID);?>" class="post-date"><?echo $prev_post->post_date;?></a></div>
                                <div class="preview-article__text"><?echo $prev_post->post_title;?></div>
                            </div>
                        </div>
                    </div>
                    <? } else { ?>
                    <div class="article-pagination__block pagination-prev-left">
                        <div class="wrap-pagination-preview pagination-prev-left">
                            <div class="preview-article__img"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"></div>
                                <div class="preview-article__text"></div>
                            </div>
                        </div>
                    </div>
                    <?}?>
                    <?if ($next_post->post_title!=null) {?>
                    <div class="article-pagination__block pagination-prev-right"><a href="<?echo get_permalink($next_post->ID);?>" class="article-pagination__link">Сдедующая статья<i class="icon icon-angle-double-right"></i></a>
                        <div class="wrap-pagination-preview pagination-prev-right">
                            <div class="preview-article__img"><img src="<?echo get_the_post_thumbnail_url($next_post->ID);?>" class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="<?echo get_permalink($next_post->ID);?>" class="post-date"><?echo $next_post->post_date;?></a></div>
                                <div class="preview-article__text"><?echo $next_post->post_title;?></div>
                            </div>
                        </div>
                    </div>
                    <?}?>
                </div>
            </div>

<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


    <!-- sidebar-->
    <!-- sidebar-->

    <div class="sidebar">
        <div class="sidebar__sidebar-item">
            <div class="sidebar-item__title">Теги</div>
            <div class="sidebar-item__content">
                <ul class="tags-list">


                    <?foreach (get_tags() as $value) { ?>
                        <li class="tags-list__item"><a href="<?echo get_tag_link($value->term_id);?>" class="tags-list__item__link">
                                <?echo $value->name;?>
                            </a></li>
                    <? } ?>


                </ul>
            </div>

            <?php get_calendar( $initial ); ?>
        </div>
    </div>

    </div>

    </div>
<?php get_footer(); ?>