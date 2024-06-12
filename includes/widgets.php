<?php

if(!defined('ABSPATH')) die();

class GymFitness_Clases_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'gymfitness_widget',
			esc_html__( 'GymFitness Clases', 'gymfitness' ), 
			array( 'description' => esc_html__( 'Agrega las Clases como Widget', 'gymfitness' ), )
		);
	}

	public function widget( $args, $instance ) {
        ?>
        <ul class="sidebar-classes">
            <?php 
                 $args = array (
                    'post_type' => 'gymfitness_clases', // post type that we want to check
                    'posts_per_page' => $instance['cantidad'],
                    'order' => 'ASC',
                    'orderby' => 'title'
                );

                $clases = new WP_Query($args); // create queries to the WordPress database
                while($clases->have_posts()) {
                    $clases->the_post();
                    ?>
                    <li>
                        <div class="class-imagen">
                            <?php 
                                the_post_thumbnail("thubmnail");
                            ?>
                        </div>
                        <div class="class-content">
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
                wp_reset_postdata();
            ?>
        </ul>
        
        <?php 

	}

    public function form( $instance ) {
        $cantidad = !empty($instance['cantidad']) ? $instance['cantidad'] : esc_html('¿Cuántas clases deseas mostrar?');
        ?>

            <p>
                <label for="<?php echo esc_attr($this->get_field_id('cantidad')) ?>">
                    <?php 
                        esc_attr_e('¿Cuántas clases deseas mostrar?')
                    ?>
                </label>
                <input 
                    class="widefat"
                    id="<?php echo esc_attr($this->get_field_id('cantidad')) ?>"
                    name="<?php echo esc_attr($this->get_field_name('cantidad')) ?>"
                    type="number"
                    value="<?php echo esc_attr($cantidad) ?>"
                />

            </p>

        <?php 
   	}

	public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['cantidad'] = (!empty($new_instance['cantidad'])) ? sanitize_text_field($new_instance['cantidad']) : "";
        return $instance;
	}
} 

function gymfitness_registrar_widget() {
    register_widget( 'GymFitness_Clases_Widget' );
}
add_action( 'widgets_init', 'gymfitness_registrar_widget' );