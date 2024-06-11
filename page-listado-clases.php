
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

                $clases = new WP_Query($args);

                while($clases->have_posts()) {
                        $clases->the_post();
                    ?>
                        <li class="card">
                            <?php 
                                the_title();
                            ?>
                        </li>
                <?php 
                    }
                    wp_reset_postdata();
                ?>
            
        </ul>
    </main>

<?php 
    get_footer(); // get the footer
?>
