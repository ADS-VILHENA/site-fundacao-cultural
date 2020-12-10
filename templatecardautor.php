
<?php
/*
Template Name: cardautor
*/
?>
<?php get_header();?>
    <main>
        <div class="main">
            <div class="content">
                <h1><?php the_title(); ?></h1>
                <?php
                    $args = array(
                    'category_name' => 'card');
                    $card = new WP_Query( $args );
                    if( $card->have_posts() ) :
                    while ( $card->have_posts() ) : $card->the_post(); ?>
                    <div class="badge">
                        <div class="badge-img">
                        <?php $template_directory_card = get_template_directory_uri(); ?>
                        <img src="<?php echo $template_directory_card;?>/assets/image/artist_test.jpeg" alt="Foto do artista">
                        </div>
                        <h1><?php the_title(); ?>
                        <span><i class="fa fa-envelope"></i>exemple@mail.com</span>
                        <span><i class="fa fa-phone"></i>(64) 91321-2902</span>
                        <span><i class="fas fa-birthday-cake"></i>dd/mm/aaaa</span>
                        <button>Ver mais</button>
                    </div>
                    <?php endwhile;?>
                    <?php wp_reset_postdata();?>
                    <?php else: ?>
                    <?php endif; ?> 
            </div>
        </div>
    </main>
<?php get_footer();?>