<?php get_header(); ?>
<section id="single" class="container">
    <div class="single-content">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="card">
                    <div class="article-header">
                        <h1><?php the_title(); ?></a></h3>
                            <span>
                                <p>Published on: <?php the_time('F j, Y'); ?></p>
                                <p>Categories: <?php the_category(', '); ?></p>
                            </span>
                            <p>Tags: <?php the_tags('', ', '); ?></p>
                    </div>
                    <div class="article-content">
                        <?php the_content(); ?>
                    </div>
                    <p>Comments: <?php comments_number(); ?></p>
                    <p>Comments: <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
                    <p>Share:
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">Facebook</a> |
                        <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>">Twitter</a> |
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>">LinkedIn</a>
                    </p>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>

    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>