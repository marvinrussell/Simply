<?php
/**
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

  <div class="container">

    <header class="page-title">
        <h1><?php the_title();?></h1>
    </header>

  <div class="row content">
    <div class="span12">
        <?php the_content(); ?>
        <?php wp_link_pages( array('before' => '<div class="page-links">' . __('Pages:', 'bootstrapwp'), 'after' => '</div>')); ?>
        <?php edit_post_link(__('Edit', 'bootstrapwp'), '<span class="edit-link">', '</span>'); ?>
        <?php endwhile; // end of the loop. ?>
    </div><!-- /.span8 -->
    <?php get_footer(); ?>