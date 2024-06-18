<?php

function gymfitness_lista_clases($cantidad = -1){ // setting $cantidad = -1, make in wp_query is getting all the results
    ?>
        <ul class="grid-list">
            <?php
            $args = array(
                'post_type' => 'gymfitness_clases', // post type that we want to check
                'posts_per_page' => $cantidad, // how many post we want in a single page
            );

            $clases = new WP_Query($args); // create queries to the WordPress database

            while ($clases->have_posts()) {
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
    <?php
}


function gymfitness_instructores(){
    ?>
        <ul class="grid-list instructors">
            <?php
            $args = array(
                'post_type' => 'instructores', // post type that we want to check
            );

            $instructors = new WP_Query($args); // create queries to the WordPress database

            while ($instructors->have_posts()) {
                $instructors->the_post();
            ?>
                <li class="instructor">
                   <?php 
                        the_post_thumbnail("large");
                   ?>
                    <div class="content text-center">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>

                         <div class="specialty">
                            <?php 
                                $esp = get_field("especialidades");

                                foreach($esp as $e) {
                                    ?> 
                                        <span class="label">
                                            <?php 
                                                echo esc_html($e);
                                            ?>
                                        </span>
                                    <?php
                                }
                            ?>
                        </div>
                   </div
                   
                </li>
            <?php
            }
            wp_reset_postdata(); // After looping through a separate query, this function restores the $post global to the current post in the main query.
            ?>
        </ul>
    <?php
}

function gymfitness_testimoniales() {
    ?>
        <ul class="testimonial-grid swiper-wrapper">
            <?php
            $args = array(
                'post_type' => 'testimoniales', // post type that we want to check
            );

            $testimoniales = new WP_Query($args); // create queries to the WordPress database

            while ($testimoniales->have_posts()) {
                $testimoniales->the_post();
            ?>
                <li class="testimonial text-center swiper-slide">
                   <blockquote>
                        <?php 
                            the_content();
                        ?>
                   </blockquote>

                   <footer class="testimonial-footer">
                        <?php 
                            the_post_thumbnail("thumbnail");
                        ?>
                        <p>
                            <?php the_title(); ?>
                        </p>
                   </footer>
                </li>
            <?php
            }
            wp_reset_postdata(); // After looping through a separate query, this function restores the $post global to the current post in the main query.
            ?>
        </ul>
    <?php
}


?>