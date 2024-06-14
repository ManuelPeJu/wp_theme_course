<?php
    while (have_posts()) : the_post(); // start the loop and contact the DB of wp
        the_title("<h1 class='text-center primary-text'>", "</h1>"); // set the name of the page/post
        if (has_post_thumbnail()) {
            // we use this if to check if we have a featured image, if we have it we publish the image, if not we don't use this code saving execution time
            the_post_thumbnail("full", array("class" => "featured-image"));
            // set the featured image. As 1st param, u can set the size of the picture.
            // As 2nd param with a associative array, u can set a class to modify with ur css
        }
        the_content(); // set the content of the page/post
    endwhile; // end the loop