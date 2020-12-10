
<?php
/*
Template Name: exposição
*/
?>
<?php get_header();?>
    <main>
        <div class="main">
            <div class="content">
                <h1><?php the_title(); ?></h1>
            </div>
                <?php
                    $args = array(
                    'category_name' => 'exposicao');
                    $exposicao = new WP_Query( $args );
                    if( $exposicao->have_posts() ) :
                    while ( $exposicao->have_posts() ) : $exposicao->the_post(); ?>
                        <div class="exposition">
                            <?php the_post_thumbnail('full');?>
                            <h1><?php the_title(); ?>
                            <p><?php the_excerpt( );?></p>
                            <span><i class="fas fa-user"></i>Julio Fernado</span>
                            <span><i class="far fa-calendar"></i>17/09/2020</span>
                            <span><i class="fas fa-compass"></i>Teatro Municipal</span>
                            <span><i class="fa fa-phone"></i>(69) 99364-5197</span>
                            </h1>
                        </div>
                    <?php endwhile;?>
                    <?php wp_reset_postdata();?>
                    <?php else: ?>
                    <?php endif; ?> 
            
        </div>
    </main>
<?php get_footer();?>