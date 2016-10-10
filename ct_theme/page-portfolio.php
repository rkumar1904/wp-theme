<?php
/*
Template Name: Portfolio Page
*/
?>

<?php get_header(); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>
<?php
$args = array(
    'post_type' => 'portfolio'
);
$query = new WP_Query($args);
?>
<section>
    <div class="container">
        <div class="row">
            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
                <div class="col-md-3">
                    <a href="<?php the_permalink(); ?>" class="thumbnail">
                        <?php the_post_thumbnail('large'); ?>  
                    </a>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div> </div>
    </section>
    <?php get_footer(); ?>
