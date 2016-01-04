<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 04.01.2016
 * Time: 14:42
 */?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php
include (TEMPLATEPATH . '/localizations/locale.php');
include (TEMPLATEPATH . '/head.php');
?>
<body lang="<?=$_GET['lang']?>">
    <main>
        <div class="container error">
            <div class="content text-center">
                <h1>404</h1>
                <h3><?=$GLOBALS['locale']['404']?></h3>
                <a href="/">Вернуться на главную</a>
            </div>
        </div>
    </main>
<?php wp_footer(); ?>
</body>
</html>