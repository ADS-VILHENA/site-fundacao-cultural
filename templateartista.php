<?php
/*
Template Name: sobre_artista
*/
?>
<?php get_header();?>
<main>
        <div class="main">
            <div class="content">
                <h1><?php the_title(); ?></h1>
                <?php
                $args = array(
                'category_name' => 'sobrearts');
                $sobrearts = new WP_Query( $args );
                if( $sobrearts->have_posts() ) :
                while ( $sobrearts->have_posts() ) : $sobrearts->the_post(); ?>
                <div class="about">
                    <div class="info">
                        <div class="info-img">
                        <?php $template_directory_card = get_template_directory_uri(); ?>
                        <img src="<?php echo $template_directory_card;?>/assets/image/artist_test.jpeg" alt="Foto do artista">
                        </div>
                        <span><i class="fas fa-user"></i>Isabelly Infante Baldaia/span>
                        <span><i class="fas fa-birthday-cake"></i>16/03/1998</span>
                    </div>
                    <p><?php the_excerpt( );?></p>

                </div>
                <div class="publications">
                <h1>Publicações</h1>
                <img src="<?php echo $template_directory_card;?>/assets/image/artist_test.jpeg" alt="Foto do artista">
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