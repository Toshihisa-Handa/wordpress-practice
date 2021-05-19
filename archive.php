<?php get_header() ?>
<h1>archive</h1>

    <div class="archive_news_container">

        <div class="archive_news">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="archive_news_content"><?php the_title('<a href="' . esc_url( get_permalink() ) . '">', '</a>'); ?></div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
   
    <?php get_footer();?>