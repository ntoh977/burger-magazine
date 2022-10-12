<?php get_header(); ?>
<div class="blockproduct categoripost-page">

<?php
$category = get_category( get_query_var( 'cat' ) );
 $cat_id = $category->cat_ID;



$args = array('cat' => $cat_id,
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
  
                    <a href="<?php the_permalink(); ?>"  title="<?php the_title_attribute(); ?>"><div class="btn">Читать статью...</div></a>
            </div>
        </div>
</div>
<?php
endwhile; 
wp_reset_postdata();    
?>
        </div>
      



<?php get_footer(); ?>

