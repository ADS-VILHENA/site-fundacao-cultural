
<?php
/*
Template Name: evento
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
                'category_name' => 'evento');
                $evento = new WP_Query( $args );
                if( $evento->have_posts() ) :
                while ( $evento->have_posts() ) : $evento->the_post(); ?>
                    <div class="event">
                        <?php the_post_thumbnail('full');?>
                        <h1><?php the_title(); ?>
                        
                        <p><?php the_excerpt( );?></p>
                        <span><i class="far fa-calendar"></i>12/12/2020</span>
                        <span><i class="fas fa-compass"></i>Praça dos militares</span>
                        <span><i class="fa fa-phone"></i>(69) 99368-9346</span>
                         </h1>
                    </div>
                    <?php endwhile;?>
                    <?php
                    wp_reset_postdata();		
                    ?>
                    <?php else: ?>
                    <?php endif; ?> 
            </div>
    </main>
    <?php get_footer();?>