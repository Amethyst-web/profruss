<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 25.10.2015
 * Time: 13:06
 *
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Tema100
 * @since Tema100 1.0
 */
?>

    <footer>
        <div class="white_wrap">
            <div class="container">
                <div class="block">
                    <p><?=$GLOBALS['locale']['footer']['languages']?>:</p>
                    <div class="langs">
                        <a href="/?lang=ru">
                            <div class="icon-rus"></div>
                        </a>
                        <a href="/?lang=en">
                            <div class="icon-eng"></div>
                        </a>
                        <a href="/?lang=fr">
                            <div class="icon-fran"></div>
                        </a>
                    </div>
                </div>
                <div class="block right">
                    <p><?=$GLOBALS['locale']['footer']['social']?>:</p>
                    <div class="soc">
                        <a href="https://www.facebook.com/tatiana.fedulova.9" target="_blank">
                            <div class="icon-f"></div>
                        </a>
                        <a href="https://www.linkedin.com/in/tatiana-fedulova-975a6669?trk=hp-identity-name" target="_blank">
                            <div class="icon-in"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="logo">
            <a href="http://amethyst-ws.ru" target="_blank" title="Веб-студия Аметист"><div class="amethyst-logo"></div></a>
        </div>
    </footer>
</main>

<?php wp_footer(); ?>
</body>
</html>