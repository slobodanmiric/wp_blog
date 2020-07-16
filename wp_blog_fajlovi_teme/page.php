<?php 
    /*
    * Template Name: Main page template
    */
?>      

<?php get_header(); ?>

      
   <!-- posts -->
    <section class="container rigtSidebar">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else : ?>
            <?php _e('Nema unetih stranica'); ?>
        <?php endif; ?>

        <?php get_sidebar();?>

    </section>
        

<?php get_footer(); ?>