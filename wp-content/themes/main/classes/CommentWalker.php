<?php
/**
 * Created by PhpStorm.
 * User: Koder
 * Date: 30.12.2015
 * Time: 18:12
 */
class CommentWalker extends Walker{
    public $db_fields = array ('parent' => 'comment_parent', 'id' => 'comment_ID');

    function start_lvl(&$output, $depth=0, $args=array()) {
        $output .= "<div>";
    }

    function end_lvl(&$output, $depth=0, $args=array()) {
        $output .= "</div>";
    }

    function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
//        die(var_dump($comment));
        if($comment->comment_approved != 0) {
//            $output .= '<table class="comment">
//                        <tbody>
//                            <tr>
//                                <td></td>
//                                <td>' . $comment->comment_author . '<span class="date">' . $comment->comment_date_gmt . '</span></td>
//                            </tr>
//                            <tr>
//                                <td></td>
//                                <td>' . $comment->comment_content . '</td>
//                            </tr>
//                        </tbody>
//                    </table>';
            $output .= '<div class="review">
                <p class="author">'.$comment->comment_author.'</p>
                <p class="text">'.$comment->comment_content.'</p>
                <p class="date">'.$comment->comment_date_gmt.'</p>
            </div>';
        }
    }

    function end_el(&$output, $comment, $depth=0, $args=array()) { }
}