<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 30.12.2015
 * Time: 17:54
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <?php if(get_comments_number() != 0): ?>
            <div class="comment-list">
                <?php
                wp_list_comments( array(
                    'style'       => 'div',
                    'walker'      => new CommentWalker(),
                    'short_ping'  => false,
                    'avatar_size' => 0,
                ) );
                ?>
            </div><!-- .comment-list -->
        <?php endif; ?>

    <?php endif;?>

    <?php comment_form([
        'fields' => [
            'author' => '<input id="author" name="author" type="text" placeholder="'.$GLOBALS['locale']['comments']['author'].'" value="'.esc_attr($commenter['comment_author']).'" size="=30"'.$aria_req.'/>',
            'email' => '<input id="email" name="email" type="email" placeholder="'.$GLOBALS['locale']['comments']['email'].'" value="'.esc_attr($commenter['comment_author_email']).'" size="30"'.$aria_req.'/>'
        ],
        'comment_notes_before' => '',
        'comment_field' => '<textarea id="comment" name="comment" placeholder="'.$GLOBALS['locale']['comments']['review'].'" aria-required="true"></textarea>',
        'class_submit' => 'button',
        'label_submit' => $GLOBALS['locale']['comments']['submit'],
        'title_reply' => $GLOBALS['locale']['comments']['reply']
    ]); ?>

</div><!-- .comments-area -->
