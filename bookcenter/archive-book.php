<?php get_header(); ?>
<section id="main">
    <div class="container-90">
        <div class="d-grid-4">
            <?php $args = array(
                'post_type' => 'book',
                'posts_per_page' => 4,
            );
            $the_query = new WP_Query($args); ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="book text-center">
                        <div class="book-thumbnail">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                        <div class="book-title">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                        <div class="book-description">
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>No books found.</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    </div>
</section>
<?php get_footer(); ?>