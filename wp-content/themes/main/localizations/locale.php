<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 30.12.2015
 * Time: 16:13
 */

switch ($_GET['lang']){
    case 'en':
        require TEMPLATEPATH.'/localizations/locale_en.php';
        break;
    case 'fr':
        require TEMPLATEPATH.'/localizations/locale_fr.php';
        break;
    default:
        require TEMPLATEPATH.'/localizations/locale_ru.php';
        break;
}
$GLOBALS['locale'] = $local;