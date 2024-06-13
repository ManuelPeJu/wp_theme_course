
<?php //Create the name of the child template
    /*
        Template Name: Galería
    */
    get_header(); // get the header
?>

    <main class="container section">
        <?php 
            while (have_posts()) : the_post(); // start the loop and contact the DB of wp
            the_title("<h1 class='text-center primary-text'>", "</h1>"); // set the name of the page/post 

            //getting the gallery 
            $galeria = get_post_gallery(get_the_ID(), false);

            //gettin the ids on array
            $galeria_imagenes_ID = explode(",", $galeria["ids"]);
            ?>

            <ul class="gallery_images">
                <?php 
                    foreach($galeria_imagenes_ID as $id) {
                        $imagen_grande = wp_get_attachment_image_src($id, "large")[0]; // we get the position 0 to get the url only
                        $imagen_full = wp_get_attachment_image_src($id, "full")[0]; // we get the position 0 to get the url only
                        ?>

                            <li>
                                <a data-lightbox="galeria" href="<?php echo $imagen_grande ?>">
                                    <img src="<?php echo $imagen_grande ?>" alt="Imagen Galería">
                                </a>
                            </li>

                        <?php
                    }
                ?>
            </ul>

            <?php 
                
            
        endwhile; // end the loop
        ?>
    </main>

    <?php 
        get_footer(); // get the footer
    ?>