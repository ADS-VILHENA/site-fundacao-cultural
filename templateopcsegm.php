<?php
/*
Template Name: dvsegmento
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
                'category_name' => 'dvsegmento');
                $dvsegmento = new WP_Query( $args );
                if( $dvsegmento->have_posts() ) :
                while ( $dvsegmento->have_posts() ) : $dvsegmento->the_post(); ?>
                        <div class="segment">
                            <?php the_post_thumbnail('full');?>
                            <h1><?php the_title(); ?>
                            <p><?php the_excerpt( );?></p>
                            <a href="<?php bloginfo('url')?>/?page_id=76#"><button >Ver mais</button></a> 
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