
<?php //Create the name of the child template
    /*
        Template Name: Listado de Clases
    */
    get_header();
?>

    <main class="container section">
        <ul class="grid-list">
            <?php 
                $args = array (
                    'post_type' => 'gymfitness_clases', // post type that we want to check
                );

                $clases = new WP_Query($args); // create queries to the WordPress database

                while($clases->have_posts()) {
                        $clases->the_post();
            ?>
                        <li class="card">
                            <?php the_post_thumbnail(); ?>
                            <div class="content">
                                <a href="<?php the_permalink(); ?>">
                                    <h3><?php the_title(); ?></h3>
                                </a>
                            </div>
                        </li>
            <?php 
                    }
                    wp_reset_postdata(); // After looping through a separate query, this function restores the $post global to the current post in the main query.
            ?>
            
        </ul>
    </main>

<?php 
    get_footer(); // get the footer
?>
