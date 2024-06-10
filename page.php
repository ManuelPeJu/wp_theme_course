
<?php 
    get_header();
?>

    <main>
        <?php 

        while( have_posts()) : the_post(); // start the loop and contact the DB of wp

        the_title("<h1 class='text-center primary-text'>", "</h1>"); // set the name of the page/post
        the_content(); // set the content of the page/post

        endwhile; // end the loop
        ?>
    </main>

</body>
</html>