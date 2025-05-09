<?php get_header(); ?>
<header id="main-header">
    <h1>Search Results for: <?php echo get_search_query(); ?></h1>
    <p id="searchform">Search for: <?php get_search_form(); ?></p>
</header>
<?php if (have_posts()) : ?>
    <p>Found <?php echo $wp_query->found_posts; ?> results</p>
<?php else : ?>
    <p>No results found for "<?php echo get_search_query(); ?>"</p>
<?php endif; ?>
    <section>
        <h2>Search results</h2>
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
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No results found.</p>
        <?php endif; ?>
    </section>
    
<?php get_sidebar(); ?>
<?php get_footer(); ?>