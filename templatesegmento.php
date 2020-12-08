
<?php
/*
Template Name: Segmento
*/
?>
<?php get_header();?>
<main>
        <div class="main">
            <div class="conten">
            <h1><?php the_title(); ?></h1>
                
                    <?php
                    $args = array(
                    'category_name' => 'segmento');
                    $segmento = new WP_Query( $args );
                    if( $segmento->have_posts() ) :
                    while ( $segmento->have_posts() ) : $segmento->the_post(); ?>
                        <div class="segment">
                        <?php the_post_thumbnail('full');?>
                        <h1><?php the_title(); ?>
                        <p><?php the_excerpt( );?></p>
                        <button>Ver mais</button>
                        </h1>
                        </div>
                    <?php endwhile;?>
                    <?php
                    wp_reset_postdata();		
                    ?>
                    <?php else: ?>
                    <?php endif; ?> 
                
            </div>
        </div>
</main>
<?php get_footer();?>