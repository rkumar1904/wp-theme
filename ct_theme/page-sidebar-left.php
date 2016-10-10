<?php
/*
Template Name: Left Sidebar
*/
 ?>


<?php get_header(); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <hr>
                    <p><?php the_content(); ?></p>

                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Sidebar Panel</h3>
                  </div>
                  <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </div>
                  <div class="panel-footer">
                    <a href="#">This is the footer of Sidebar</a>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
