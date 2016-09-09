<?php
/**
 * Default Post Template
 * Description: Post template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

  <div class="container">
    <div class="row content">
        <div class="span12">
            <h1><?php the_title();?></h1>
             <p class="meta"><?php echo bootstrapwp_posted_on();?></p>
             <?php echo bootstrapwp_autoset_featured_img(); ?>
            <?php the_content(); ?>
            <?php the_tags('<p>Tags: ', ', ', '</p>'); ?>
            <?php endwhile; // end of the loop. ?>
            <hr/>

            <?php comments_template(); ?>
            <?php bootstrapwp_content_nav('nav-below'); ?>
        </div><!-- /.span12 -->

    
    <?php get_footer(); ?>