<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 25.10.2015
 * Time: 12:53
 *
 * @package WordPress
 * @subpackage Profruss
 * @since Profruss 1.0
 */

get_header(); ?>
    <div class="container index">
        <div class="content text-center">
            <h1 class="green"><?=the_title();?></h1>
            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>

            <?php the_content();?>
        </div>
    </div>
<?php get_footer(); ?>