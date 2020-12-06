<?php get_header(); ?>

<main>
        <div class="main">
            <div class="content">
                <div class="news">
                <?php
                $args = array(
                'category_name' => 'noticias',
                'posts_per_page' => 1);
                $noticia = new WP_Query( $args );
                if( $noticia->have_posts() ) :
                while ( $noticia->have_posts() ) : $noticia->the_post(); ?>
                
                    <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('full');?>
                    <h1><?php the_title(); ?></h1>
                    <p> <?php the_excerpt()?>
                    </p>
                    <hr class="horizontal">
                    </a>
               
                <?php endwhile;?>
                <?php
                wp_reset_postdata();		
                ?>
                <?php else: ?>
                <?php endif; ?> 
                </div>

                <div class="segments">
                    <?php
                    $args = array(
                    'category_name' => 'menu_segmentos',
                    'order' => 'ASC');
                    $menu_segmentos = new WP_Query( $args );
                    if( $menu_segmentos->have_posts() ) :
                        while ( $menu_segmentos->have_posts() ) : $menu_segmentos->the_post(); ?>
                            <div class="index_segment">
                                <?php the_post_thumbnail('full');?>
                                <h1><?php the_title(); ?></h1>
                            </div>
               
                        <?php endwhile;?>
                    <?php
                    wp_reset_postdata();		
                    ?>
                    <?php else: ?>
                    <?php endif; ?> 
                    
                </div>        
            </div>
            </div>

        </div>
    </main>

<?php get_footer(); ?>