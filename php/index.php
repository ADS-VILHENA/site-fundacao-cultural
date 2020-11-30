<?php get_header(); ?>

    <main>
        <div class="main">
            <div class="content" style="display:flex;">

                <?php while (have_posts()) : if have_posts() : the_posts(); ?> 

                <div class="noticias" style="width: 100%; margin-right: 30px; position: relative; display:block;">
                <a href="<?php the_permalink();?>">
                    <img src="./assets/image/Expovil - 55.jpg" alt="Foto noticia" style="width: 100%;"><br></br>
                        <h1 style="width: 100%; margin-right: 20px; text-align: center;">Feira agropecuária: Iª noite de rodeio</h1><br></br>
                        <p style="width: 100%; margin-right: 20px; text-align:justify;">
                            Pretium aenean pharetra magna ac placerat vestibulum lectus mauris ultrices. Imperdiet nulla malesuada pellentesque elit eget. Arcu cursus euismod quis viverra nibh cras.
                        </p>
                        <h3 style="width: 100%; margin-right: 20px; text-align: center;">Recentes</h3>
                </a>
                </div>
                    <div class="classes" style="width: 80%; position: relative; display:block;">
                        <?php the_post_thumbnail('full');?>
                        <h1 style="width: 80%; text-align: center;"><?php the_title(); ?></h1>
                    </div>
                    
            </div>

        </div>
    </main>

<?php get_footer(); ?>