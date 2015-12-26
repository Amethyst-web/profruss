<?php
/**
 * Template Name: Главная страница
 * Created by PhpStorm.
 * User: Nikita
 * Date: 25.12.2015
 * Time: 14:35
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
