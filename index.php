<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="contenedor">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logotipo"> <!-- WP function to get the url dynamically -->
            </div>
            <nav>
                <a href="/wpgymfitness/nosotros">Nosotros</a>
                <a href="/wpgymfitness/contacto">Contacto</a>
                <a href="/wpgymfitness/blog">Blog</a>
            </nav>
        </div>
    </header>

    <main>
    <?php 

    while( have_posts()) : the_post(); // start the loop and contact the DB of wp

    the_title(); // set the name of the page/post
    the_content(); // set the content of the page/post

    endwhile; // end the loop

    ?>

    </main>

</body>
</html>


