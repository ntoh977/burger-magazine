
<!DOCTYPE html>
<html>


<body>

<?php get_header(); ?>

    <div class="menu">
        <?php 
     $loop = new WP_Query( array( 
        'post_type' => 'customposttypename',
        'post_status' => 'publish',
        'posts_per_page' => 1, 
        ) );
?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <?php the_post_thumbnail('full', array('class' => 'menu__img')); ?>
        <!-- <img src="/img/menu_2bk.png" class="menu__img" alt=""> -->
        <?php endwhile; ?>


        <div class="text">Доставка ВКУСНЕЙШИХ БЛЮд за 60 минут</div>
        <div class="menu__btn">
            <div class="menu__btn-text">Ещё не пробовал?</div>
        </div>
    </div>
    <nav class="menu-inner">

        <?php 
wp_nav_menu( array(
    'Menu_top'  => '',// Псевдоним навигации
    'menu'   => '', // ожидаемое меню
    'container'  => 'ul',  // контейнерный тег
    'container_class' => 'menu--catigory',// ul значение класса родительского узла
    'container_id'  => '',  // ul значение идентификатора родительского узла
    'menu_class'   => 'menu--catigory',   // значение класса узла ul
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
        <!-- </ul> -->
    </nav>
    <div class="blockproduct">
        <?php 
          $category_ids = get_all_category_ids();
          ?>
        <div class="title-main"><?php echo get_cat_name($category_ids[1]); ?></div>
        <div class="slider__top">
            <?php
            $args = array('cat' => $category_ids[1],
                      'posts_per_page' => '-1',
                    );
                      $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="blockproduct__container">
                <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail( 'full', array( 'class' => 'blockproduct__img' ) ); ?>

                    <div class="padding">
                        <div class="blockproduct-title-weight">
                            <div class="title"><a href="<?php the_permalink(); ?>"
                                    title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                            <!-- <div class="the_weight">Вес: 225 г</div> -->
                        </div>
                        <div class="text"> <?php echo  wp_trim_words(get_the_excerpt(), 7, '...');?></div>
                        <div class="blockproduct-price-btn">
                            <!-- <div class="price">620 ₽</div> -->
                            <div class="btn"><a href="<?php the_permalink(); ?>"
                                    title="<?php the_title_attribute(); ?>">Читать статью...</div>
                        </div>
                    </div>
            </div>
            <?php
            endwhile; 
            wp_reset_postdata();    
            ?>

        </div>
    </div>
    <div class="blockproduct">
        <div class="title-main"><?php echo get_cat_name($category_ids[2]); ?></div>
        <div class="slider__top">
            <?php
            $args = array('cat' => $category_ids[2],
                      'posts_per_page' => '-1',
                    );
                      $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="blockproduct__container">
                <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail( 'full', array( 'class' => 'blockproduct__img' ) ); ?>

                    <div class="padding">
                        <div class="blockproduct-title-weight">
                            <div class="title"><a href="<?php the_permalink(); ?>"
                                    title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                            <!-- <div class="the_weight">Вес: 225 г</div> -->
                        </div>
                        <div class="text"> <?php echo  wp_trim_words(get_the_excerpt(), 7, '...');?></div>
                        <div class="blockproduct-price-btn">
                            <!-- <div class="price">620 ₽</div> -->
                            <div class="btn"><a href="<?php the_permalink(); ?>"
                                    title="<?php the_title_attribute(); ?>">Читать статью...</div>
                        </div>
                    </div>
            </div>
            <?php
            endwhile; 
            wp_reset_postdata();    
            ?>
        </div>
    </div>
    <div class="blockproduct">
        <div class="title-main"><?php echo get_cat_name($category_ids[3]); ?></div>
        <div class="slider__top">
            <?php
            $args = array('cat' => $category_ids[3],
                      'posts_per_page' => '-1',
                    );
                      $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="blockproduct__container">
                <a id="<?php $post->ID ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail( 'full', array( 'class' => 'blockproduct__img' ) ); ?>

                    <div class="padding">
                        <div class="blockproduct-title-weight">
                            <div class="title"><a href="<?php the_permalink(); ?>"
                                    title="<?php the_title_attribute(); ?>"><?php the_title();?></a></div>
                            <!-- <div class="the_weight">Вес: 225 г</div> -->
                        </div>
                        <div class="text"> <?php echo  wp_trim_words(get_the_excerpt(), 7, '...');?></div>
                        <div class="blockproduct-price-btn">
                            <!-- <div class="price">620 ₽</div> -->
                            <div class="btn"><a href="<?php the_permalink(); ?>"
                                    title="<?php the_title_attribute(); ?>">Читать статью...</div>
                        </div>
                    </div>
            </div>
            <?php
            endwhile; 
            wp_reset_postdata();    
            ?>
        </div>
    </div>
    <div class="our-cafe"> <img class="our-cafe__mask_group"
            src="<?php echo get_template_directory_uri(); ?>/img/Mask_Group.png" alt="">
        <img class="our-cafe__center_bottom" src="<?php echo get_template_directory_uri(); ?>/img/center_bottom.png"
            alt="">
        <img class="our-cafe__center_bottom2" src="<?php echo get_template_directory_uri(); ?>/img/center_bottom2.png"
            alt="">
        <div class="our-cafe__container">
            <div class="our-cafe__left">
                <div class="our-cafe__title">НАШЕ КАФЕ</div>
                <div class="our-cafe__text">Мы расположены в одном из самых живописных мест города — на берегу реки, это
                    ваш оазис в черте города, куда можно сбежать от шумного и пыльного мегаполиса. Мы, действительно
                    уникальные, ведь все продумано до мелочей: проект построен из дикого закарпатского сруба, камин в
                    основном зале ресторана и панорамные окна с видом на реку, уютные беседки на берегу реки и лучшая
                    видовая террасса, шатер с посадкой на 200 человек, сказочный детский домик и бассейн.</div>
                <div class="our-cafe__btn">ПОСМОТРЕТЬ МЕНЮ</div>
            </div>
            <div class="our-cafe__right">
                <div class="our-cafe__window"> <img src="<?php echo get_template_directory_uri(); ?>/img/onion_1.png"
                        alt="">
                    <div class="our-cafe__title">Свежайшие продукты</div>
                </div>
                <div class="our-cafe__window"> <img class="flash_img"
                        src="<?php echo get_template_directory_uri(); ?>/img/onion_2.png" alt="">
                    <div class="our-cafe__title">Быстрая доставка</div>
                </div>
                <div class="our-cafe__window"> <img src="<?php echo get_template_directory_uri(); ?>/img/onion_3.png"
                        alt="">
                    <div class="our-cafe__title">Лучшие повора</div>
                </div>
                <div class="our-cafe__window"> <img src="<?php echo get_template_directory_uri(); ?>/img/onion_1.png"
                        alt="">
                    <div class="our-cafe__title">Свежайшие продукты</div>
                </div>
            </div>
        </div>
    </div>
    <div class="maps-reclama"> <iframe class="resp-iframe"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5461.0230299085515!2d33.5254187!3d46.8139275!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c39c8ce1eb5cd1%3A0x5849823f06612120!2z0YPQuy4g0JzQtdC70LjRgtC-0L_QvtC70YzRgdC60LDRjywgNDjQsCwg0JrQsNGF0L7QstC60LAsINCl0LXRgNGB0L7QvdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA3NDgwMA!5e0!3m2!1sru!2sua!4v1665158636793!5m2!1sru!2sua"
            frameborder="0" loading="lazy"></iframe>
        <div class="maps-reclama-top__container">
            <div class="title">КОНТАКТЫ</div><img class="Line_bottom"
                src="<?php echo get_template_directory_uri(); ?>/img/Line_bottom.png" alt="">
            <div class="maps-reclama-textadress"> <img class="icon_bottom"
                    src="<?php echo get_template_directory_uri(); ?>/img/icon_bottom.png" alt="">
                <div>
                    <div class="maps-reclama-textadress-title"> Наш адрес:</div>
                    <div class="maps-reclama-textadress-text">МО, городской округ Красногорск, село Ильинкое,
                        Экспериментальная улица, 10</div>
                </div>
            </div>
            <div class="maps-reclama-textadress"> <img class="icon_bottom"
                    src="<?php echo get_template_directory_uri(); ?>/img/Message_bottom.png" alt="">
                <div>
                    <div class="maps-reclama-textadress-title"> Наша почта:</div>
                    <div class="maps-reclama-textadress-text">auto.wash@gmail.com</div>
                </div>
            </div><img class="Line_bottom" src="<?php echo get_template_directory_uri(); ?>/img/Line_bottom.png" alt="">
            <div class="maps-reclama-textadress align">
                <div class="btn">ЗАБРОНИРОВАТЬ СТОЛ</div>
                <div class="container__text">
                    <div class="tell">+7 (917) 510-57-59 </div>
                    <div class="text">Звоните или оставляйте заявку</div>
                </div>
            </div>
            <div class="title__soc">
                <div class="title_">Мы в соц сетях:</div>
                <div class="soc"> <img class="" src="./img/soc1.png" alt="">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/img/soc2.png" alt="">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/img/soc3.png" alt="">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/img/soc4.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>


</body>

</html>
<!-- <script src="./jquery-1.12.4.js" type="text/javascript"></script>
<script src="./slick/slick.min.js" type="text/javascript"></script>
<script src="./script.js" type="text/javascript"></script> -->