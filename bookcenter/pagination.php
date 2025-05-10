<div id="pagination">
    <div class="nav-previous">
        <?php if(is_single()) {
            previous_post_link('%link', 'Previous Post');
        } else {
            previous_posts_link('Previous Page');
        }
        ?>
    </div>
    <div class="nav-next">
        <?php if(is_single()) {
            next_post_link('%link', 'Next Post');
        } else {
            next_posts_link('Next Page');
        }
        ?>
</div>