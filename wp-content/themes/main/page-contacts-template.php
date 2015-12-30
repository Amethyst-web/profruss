<?php
/**
 * Template Name: Контакты
 * Created by PhpStorm.
 * User: Nikita
 * Date: 26.12.2015
 * Time: 14:00
 */
get_header(); ?>

<div class="container contacts">
    <div class="content">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>

        <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>

        <table class="image-table text-center">
            <tr>
                <td></td>
                <td>
                    <h1><?=the_title();?></h1>
                    <div class="contact-container">
                        <?php the_content();?>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php get_footer(); ?>
