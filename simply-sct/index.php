<?php
/**
 * Description: Default Index template to display loop of blog posts
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
<div class="container">

    <div class="row content">
        <div class="span12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div <?php post_class(); ?>>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                        <h1><?php the_title();?></h1>
                    </a>
                    <p class="meta">
                        <?php echo bootstrapwp_posted_on();?>
                    </p>

                    <div class="row">
                        <?php // Post thumbnail conditional display.
                        if ( bootstrapwp_autoset_featured_img() !== false ) : ?>
                            <div class="span12">
                                <a href="<?php the_permalink(); ?>" title="<?php  the_title_attribute( 'echo=0' ); ?>"></a>
<?php echo bootstrapwp_autoset_featured_img(); ?>

                            
                        <?php else : ?>
                        

                        <?php endif; ?>
                        <?php the_excerpt(); ?>        
                            </div>
                    </div><!-- /.row -->

                    <hr/>
                </div><!-- /.post_class -->
            <?php endwhile; endif; ?>
            <?php bootstrapwp_content_nav('nav-below');?>
        </div>
            
            

    
    <?php get_footer(); ?>