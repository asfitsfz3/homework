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
                            <div class="post-date"><?echo get_the_date('d.m.Y');?></div>
                        </div>
                        <div class="post-content__post-text">
                            <div class="post-title">
                                <?php the_title(); ?>
                            </div>
                            <p>
                                <?php
                                if (get_the_category()[0]->name=='Новости') {
                                    the_excerpt();
                                } elseif (get_the_category()[0]->name=='Акции') {
                                    echo get_post_meta(get_the_ID(), 'description', true);
                                }

                                 ?>
                            </p>
                        </div>
                        <div class="post-content__post-control"><a href="<?php the_permalink(); ?>" class="btn-read-post">Читать далее >></a></div>
                    </div>
                </div>
                <!-- post-mini_end-->

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

                <div class="post-content__post-control">
                <div class="btn-read-post">
                    <?echo paginate_links();?>
                </div>
                </div>
            </div>
        </div>
<?}?>




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

                <?php get_calendar($initial); ?>
            </div>
        </div>

    </div>

</div>
<?php get_footer(); ?>
