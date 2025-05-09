<div id="pagination">
    <div class="container">
            <div class="nav-previous align-left">
                <?php if(is_single()) {
                    previous_post_link('%link', 'Previous Post');
                } else {
                    previous_posts_link('Previous Page');
                }
                ?>
            </div>
            <div class="nav-next align-right">
                <?php if(is_single()) {
                    next_post_link('%link', 'Next Post');
                } else {
                    next_posts_link('Next Page');
                }
                ?>
            </div>
    </div>
</div>