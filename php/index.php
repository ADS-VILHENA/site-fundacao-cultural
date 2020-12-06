<?php get_header(); ?>

<main>
        <div class="main">
            <div class="content">
                <div class="news">
                    <a href="<?php the_permalink();?>">
                    <img src="./assets/image/Expovil - 55.jpg" alt="Foto notícia">
                    <h1>Feira agropecuária: Iª noite de
                        rodeio</h1>
                    <p>
                        Pretium aenean pharetra magna ac placerat vestibulum lectus mauris ultrices. Imperdiet nulla
                        malesuada pellentesque elit eget. Arcu cursus euismod quis viverra nibh cras.
                    </p>
                    <hr class="horizontal">
                    <h1>Recentes</h1>
                    </a>
                </div>
                <div class="segments">
                    <div class="index_segment">
                        <?php the_post_thumbnail('full');?>
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>

            </div>

        </div>
    </main>

<?php get_footer(); ?>