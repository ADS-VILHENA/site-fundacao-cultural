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
            <a href <?php echo home_url ('/'); ?>class="logo"><?php the_custom_logo()?></a>
            <input type="checkbox" id="check">
            <label for="check" class="show-menu"><i class="fas fa-bars"></i></label>
            <div class="menu">
                <li><a href="#">Início</a></li>
                <li><a href="#">Sobre nós</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Contato</a></li>
                <label for="check" class="hide-menu"><i class="fas fa-times"></i></label>
            </div>
            <li class="search-bar">
                <input type="search" placeholder="Pesquisar" required>
                <label for="check" class="search-button"><i class="fas fa-search"></i></label>
            </li>
        </nav>
    </header>