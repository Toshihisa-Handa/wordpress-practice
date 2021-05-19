<?php get_header() ?>
<h1>archive-blog</h1>

    <div class="archive_blog_container">

        <div class="archive_blog">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="archive_blog_content"><?php the_title('<a href="' . esc_url( get_permalink() ) . '">', '</a>'); ?></div>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
   
    <?php get_footer();?>