<!DOCTYPE html>
<html <?php language_attributes();?>>
<link rel="shortcut icon" href="favicon.png">

<head>
    
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    
    <script src="https://kit.fontawesome.com/f148631463.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class()?>>
    <header>
        <nav class="header">
        <?php $template_directory = get_template_directory_uri(); ?>
        <img src="<?php echo $template_directory;?>/assets/image/logo/funcultural_logo.png" width="125px"/>

            <input type="checkbox" id="check">
            <label for="check" class="show-menu"><i class="fas fa-bars"></i></label>
            <div class="menu">
                <li><a href="<?php bloginfo('url')?>/">Início</a></li>
                <li><a href="#">Sobre nós</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="<?php bloginfo('url')?>/?page_id=57">Contato</a></li>
                <label for="check" class="hide-menu"><i class="fas fa-times"></i></label>
            </div>
            <li class="search-bar">
                <input type="search" placeholder="Pesquisar" required>
                <label for="check" class="search-button"><i class="fas fa-search"></i></label>
            </li>
        </nav>
    </header>