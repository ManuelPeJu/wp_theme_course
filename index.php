    <?php 
        get_header(); // get the header
    ?>
    <h1>desde index.php</h1>
    <main>
        <?php 
            while( have_posts()) : the_post(); // start the loop and contact the DB of wp

            the_title(); // set the name of the page/post
            the_content(); // set the content of the page/post

            endwhile; // end the loop
        ?>
    </main>

    <?php 
        get_footer(); // get the footer
    ?>

