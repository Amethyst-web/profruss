<?php
/**
 * Template Name: Главная страница
 * Created by PhpStorm.
 * User: Nikita
 * Date: 25.12.2015
 * Time: 14:35
 */

get_header(); ?>

<h1>Уроки русского языка</h1>
<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>

<?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<?php the_content();?>

<?php get_footer(); ?>
