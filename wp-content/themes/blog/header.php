<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
   

    <!-- <link rel="stylesheet" href="scss.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- <link rel="stylesheet" href="./slick/slick.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title></title>
</head>
    <?php wp_head(); ?>

</head>

<?php
		wp_body_open(); ?>
        <div class="top__container">
        <div class="top__logo"><img src=" <?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
echo $image[0];
    ?>" /></div>
        <div class="top__input">
            <form class="example" action="">
                <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/img/Location.png"
                        class="location" alt=""></button>
                <input type="text" placeholder="Введите адрес доставки" name="search2">
                <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/img/Ellipse_739.png"
                        class="search_ig" alt=""></button>
            </form>
        </div>
        <div class="top__tell--top__container">
            <div class="top__tell__img"><img src="<?php echo get_template_directory_uri(); ?>/img/Ellipse.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Calling.png" class="calling" alt="">
            </div>
            <div class="top__tell--numbcontacts">
                <div class="top__tell--contacts">Контакты:</div>
                <div class="top__tell--numb">+7 (917) 510-57-59 </div>
            </div>
        </div>
        <div class="top__btn">
            <div class="top__btn-text">Корзина </div>
            <div class="top__btn--numder--product">4</div>
        </div>
    </div>