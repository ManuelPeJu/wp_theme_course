
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
            the_content(); // set the content of the page/post
        endwhile; // end the loop
        ?>
    </main>

    <?php 
        get_footer(); // get the footer
    ?>