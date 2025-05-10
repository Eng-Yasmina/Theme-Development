<?php get_header(); ?>
<section>
    <p>page not found</p>
    <?php get_search_form(); ?>
    <div class="container posts-container">
        <?php $the_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1
        )); ?>
        <?php if ($the_query->have_posts()) : ?>
            <h2>Latest Posts</h2>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <article class="card">
                    <div class="article-header">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <span>
                            <p>Published on: <?php the_time('F j, Y'); ?></p>
                            <p>Categories: <?php the_category(', '); ?></p>
                        </span>
                        <p>Tags: <?php the_tags('', ', '); ?></p>
                    </div>
                    <div class="article-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            <?php get_template_part('pagination'); ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>