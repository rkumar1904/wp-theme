<?php get_header(); ?>
<section>
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-md-8">
                    <?php the_field('images'); ?>
                </div>
                <div class="col-md-4">
                    <h2><?php the_title(); ?></h2>
                    <p>
                        <?php the_field('description'); ?>
                    </p>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
