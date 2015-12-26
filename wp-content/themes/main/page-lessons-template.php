<?php
/**
 * Template Name: Занятия
 * Created by PhpStorm.
 * User: Nikita
 * Date: 26.12.2015
 * Time: 14:36
 */
get_header(); ?>

    <div class="container lessons">
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
                    <td><h1>Занятия</h1></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <?php $posts = get_posts([
                            'posts_per_page' => 0,
                            'category_name' => 'lessons'
                        ]);
                        foreach($posts as $post):?>
                            <div class="lesson">
                                <h2><?=$post->post_title?></h2>
                                <h3><?=get_post_meta($post->ID, 'Краткое описание', true);?></h3>
                                <p><?=$post->post_content?></p>
                                <p class="price">Цена: <?=get_post_meta($post->ID, 'Цена', true);?> руб.</p>
                            </div>
                        <?php endforeach; ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
<?php get_footer(); ?>