<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *

 */

?>

<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->

<footer>
        <ul class="footer__menu">
            <li>
                <div class="title">
                <div class="top__logo">
        <a href="<?php echo home_url(); ?>">
            <img src=" <?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
echo $image[0];
    ?>" /></a></div>
                </div>
            </li>
            <li>© ООО СК «АПШЕРОН» <br>Все права защищены. 2010-2020</li>
            <li>Пользовательское соглашение</li>
            <li>Карта сайта</li>
            <li>Политика конфиденциальности</li>
        </ul>
        <ul class="footer__menu2">
            <!-- <li>О ресторане </li>
            <li>Условия доставки </li>
            <li>Возврат товара </li>
            <li>Акции</li> -->
            <?php 
wp_nav_menu( array(
    'footer'  => 'footer',// Псевдоним навигации
    'theme_location'  => 'footer',   
    'menu'   => 'footer', // ожидаемое меню
    'container'  => 'ul',  // контейнерный тег
    'container_class' => 'footer__menu2',// ul значение класса родительского узла
    'container_id'  => '',  // ul значение идентификатора родительского узла
    'menu_class'   => 'footer__menu2',   // значение класса узла ul
    'menu_id'   => '',  // значение идентификатора узла ul
    'echo'  => true,// выводить ли меню, по умолчанию true
    'fallback_cb' => 'wp_page_menu',  // Если меню не существует, вернитесь в меню по умолчанию, установите значение false, чтобы не возвращать
    'before' => '', // текст перед ссылкой
    'after'  => '', // текст после ссылки
    'link_before'  => '',   // перед текстом ссылки
    'link_after'  => '',// после текста ссылки
    'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>',   // Как упаковать список
    'depth' => 0,   // Глубина меню, по умолчанию 0
    'walker' => ''  // Пользовательский ходок
  ) );
?>
        </ul>
    </footer>

    <div id="top" onclick="toTop();"><img class="on__top__btnimg"
            src="<?php echo get_template_directory_uri(); ?>/img/image_1.png" alt="no pic" /></div>

<?php wp_footer(); ?>
