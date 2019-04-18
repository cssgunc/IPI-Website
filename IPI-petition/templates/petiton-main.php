<?php /* Template Name: IPI Petition Page */ ?>

    <?php get_header(); ?>

        <div class="row">

        <div class="col-sm-8" blog-main>

            <?php get_template_part("content", get_post_format()); ?>
            
            <?php if ( have_posts() ): while ( have_posts() ): the_posts(); ?>

<?php endwhile; endif; ?>

        </div>

    


        <?php get_sidebar(); ?>

         </div>

<?php get_footer(); ?>
