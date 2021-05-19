<?php get_header() ?>
<h1>single-blog</h1>

    <div class="single_blog_container">

        <div class="single_blog">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="single_blog_content"><?php the_title(); ?></div>
                    <div class="single_blog_text"><?php the_content(); ?></div>

                    <?php endwhile; ?>
            <?php endif; ?>
        <?php the_category(); ?>
        </div>

    </div>
   
    <?php get_footer();?>