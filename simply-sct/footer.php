<?php
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
?>
        <footer>
            <div class="container">
                <p>&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?> - Theme by <a href="http://SuperCleanThemes.com" rel="nofollow" target="_blank" >SuperCleanThemes.com</a></p>
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("footer-content");
                } ?>
            </div><!-- /container -->
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>