<?php get_header() ?>

<h1>single</h1>

<div class="single_container">


    <div class="single_news">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="news_content"><?php the_title(); ?></div>
                <div class="home_news_text"><?php the_content(); ?></div>
               <dl>
                   <?php
                    $favorite = get_post_meta(get_the_ID(),'趣味',true);
                    $date = get_post_meta(get_the_ID(),'日付',true);
                   ?>
                   <dt>趣味</dt>
                   <dd><?php the_field('趣味'); ?></dd>
                   <dt>日付</dt>
                   <dd><?php the_field('日付'); ?></dd>
               </dl>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>


<?php get_footer(); ?>