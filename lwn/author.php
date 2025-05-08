<?php get_header(); ?>
    <section>
        <h2>Blog Posts</h2>
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post();?>
                <article>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                    <p>Published on: <?php the_time('F j, Y'); ?></p>
                    <p>By: <?php the_author(); ?></p>
                    <p>Categories: <?php the_category(', '); ?></p>
                    <p>Tags: <?php the_tags('', ', '); ?></p>
                    <p><?php the_post_thumbnail(); ?></p>
                    <p><?php the_content(); ?></p>
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
    </section>
    
<?php get_sidebar(); ?>
<?php get_footer(); ?>