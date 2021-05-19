<?php get_header() ?>
<h1>index</h1>
<div class="home_main_container">


    <div class="home_top">
        <div class="home_top_title"><?php bloginfo('name'); ?></div>
    </div>
    <div class="home_news">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="home_news_container">
                    <div class="news_content"><?php the_title('<a href="' . esc_url(get_permalink()) . '">', '</a>'); ?></div>
                    <div class="home_news_text"><?php the_excerpt(); ?></div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php the_category(); ?>
    </div>
    <div class="home_blog">
       <?php 
        $data =array(
            'post_type' => 'blog',
            'post_per_page' => 3
        );
        $query = new WP_Query($data);
        ?>

<?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="home_blog_container">
                    <div class="home_blog_content"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></div>
                    <div class="home_blog_text"><?php the_excerpt(); ?></div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <a href="<?php echo $url = home_url()."/archives/blog"; ?>">Blog</a>
 
    </div>
</div>

<?php get_footer(); ?>