<?php
/**
 * Template Name: Отзывы
 * Created by PhpStorm.
 * User: Nikita
 * Date: 30.12.2015
 * Time: 17:48
 */
get_header(); ?>

    <div class="container reviews">
        <div class="content">

            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>

            <table class="image-table">
                <tr>
                    <td></td>
                    <td><h1><?=the_title();?></h1></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <?php if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif; ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
<?php get_footer(); ?>