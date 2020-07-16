<?php get_header(); ?>
    
    <!-- posts -->
    <section class="posts container">
       
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <article>
            <div class="featured-image">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="text">
                <h3><?php the_title(); ?></h3>
                <div class="meta">
                <a href=""><?php the_author(); ?></a> | <a href=""><?php the_date(); ?></a>
                </div>
                <hr>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn">
                    <?php _e('Ceo tekst'); ?>
                </a>
            </div>
        </article>
        <?php endwhile; else : ?>
            <?php _e('Nema unetih blog postova'); ?>
        <?php endif; ?>
        
    </section>

<?php get_footer(); ?>