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

</main>
<footer>
    <div class="white_wrap">
        <div class="container">
            <div class="block">
                <p>Языки</p>
                <div class="langs">
                    <a href="#lang">
                        <div class="icon-eng"></div>
                    </a>
                    <a href="#lang">
                        <div class="icon-rus"></div>
                    </a>
                    <a href="#lang">
                        <div class="icon-fran"></div>
                    </a>
                </div>
            </div>
            <div class="adr block">
                <p>Адрес:</p>
                <p>ул. Новоостаповская</p>
                <p>д.12 кв.15</p>
            </div>
            <div class="phone block">
                <p>Телефон:</p>
                <p>8(985)1000 558</p>
                <a href="mailto:fetatti@gmail.com">email:fetatti@gmail.com</a>
            </div>
            <div class="block">
                <p>Я в соцсетях</p>
                <div class="soc">
                    <a href="#soc">
                        <div class="icon-f"></div>
                    </a>
                    <a href="#soc">
                        <div class="icon-vk"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="logo">
        <div class="amethyst-logo"></div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>