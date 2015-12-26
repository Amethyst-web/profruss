<?php
/**
 * Template Name: Обо мне
 * Created by PhpStorm.
 * User: Nikita
 * Date: 25.12.2015
 * Time: 15:30
 */

get_header(); ?>

<div class="container about">
    <div class="content">
        <h1>Обо мне</h1>
        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>

        <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>

        <div class="my-photo pull-left">
            <div class="inner-border"></div>
        </div>
        <?php the_content();?>
    </div>
</div>
<?php get_footer(); ?>