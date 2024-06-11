
<?php //Create the name of the child template
    /*
        Template Name: Listado de Clases
    */
    get_header();
?>

    <main class="container section">
        <?php 
            get_template_part("template-parts/pagina");
        ?>
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
                                <a href="<?php the_permalink(); ?>"> <!-- Return the direct permalink to our classes -->
                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>
                                </a>
                                <?php 
                                    /* get_field(''); obtains data from a field and stores it in a variable */
                                    $hora_inicio = get_field('hora_inicio');
                                    $hora_fin = get_field('hora_fin');
                                ?>
                                <p>
                                    <!-- the_field(''); obtains the data collected on the variable that used get_field(''); -->
                                    <?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin ?>
                                </p>
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
