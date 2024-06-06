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
            <!-- add the dinamyc menu -->

            <?php 

                $args = array (
                    "theme_location" => "menu-principal", // locate the menu u want to render
                    "container" => "nav", // set the container as a nav tag, default container are a div
                    "container_class" => "menu-container", // set the classname for a css modification
                );

                wp_nav_menu($args); // this function render a menu taking a associative array as menu location
 
            ?>
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


