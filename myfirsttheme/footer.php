<footer>
    <p>&copy; <?php echo date('Y'); ?> My First Theme. All rights reserved.</p>
    <nav>
        <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
            <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
        </ul>
    </nav>
    <?php wp_footer(); ?>
</footer>


<footer>
    <p>&copy; <?php echo date('Y'); bloginfo('name');?></p>
    <?php wp_footer(); ?>
</footer>