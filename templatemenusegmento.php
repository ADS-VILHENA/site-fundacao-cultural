
<?php
/*
Template Name: opcsegmento
*/
?>
<?php get_header();?>
<main>
        <div class="main">
            <div class="content">
                <h1><?php the_title(); ?></h1>
                <?php
                $args = array(
                'category_name' => 'opcsegmento');
                $opcsegmento = new WP_Query( $args );
                if( $opcsegmento->have_posts() ) :
                while ( $opcsegmento->have_posts() ) : $opcsegmento->the_post(); ?>
                    <div class="segment">
                    <?php the_post_thumbnail('full');?>
                    <h1><?php the_title(); ?>
                    <p><?php the_excerpt( );?></p>
                    <a href="<?php bloginfo('url')?>/?page_id=60#"><button >Ver mais</button></a>
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