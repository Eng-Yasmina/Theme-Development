    <footer id="main-footer">
        <div class="footer-container">
            <div class="footer-column">
                <?php if(is_active_sidebar('footer1')) : ?>
                    <?php dynamic_sidebar('footer1'); ?>
                <?php endif; ?> 
            </div>
            <div class="footer-column">
                <?php if(is_active_sidebar('footer2')) : ?>
                    <?php dynamic_sidebar('footer2'); ?>
                <?php endif; ?> 
            </div>
            <div class="footer-column">
                <?php if(is_active_sidebar('footer3')) : ?>
                    <?php dynamic_sidebar('footer3'); ?>
                <?php endif; ?> 
            </div>
            <div class="footer-column">
                <p>Copyright</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>