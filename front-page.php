<?php 
    get_header();
?>

<section class="welcome section container text-center">
    <h2 class="primary-text">
        <?php the_field("encabezado_bienvenida");?>
    </h2>
    <p>
        <?php the_field("texto_bienvenida");?>
    </p>
</section>

<section class="areas">
    <div class="area">
        <?php
            $area_1 =  get_field("area_1");
            $imagen = $area_1["imagen"]["sizes"]["medium_large"];
            $texto = $area_1["texto"];
        ?>
        <img src="<?php echo esc_attr($imagen); ?>" alt="<?php echo esc_attr($texto) ?>">
        <p><?php echo esc_html($texto); ?></p>
    </div>

    <div class="area">
        <?php
            $area_2 =  get_field("area_2");
            $imagen = $area_2["imagen"]["sizes"]["medium_large"];
            $texto = $area_2["texto"];
        ?>
        <img src="<?php echo esc_attr($imagen); ?>" alt="<?php echo esc_attr($texto) ?>">
        <p><?php echo esc_html($texto); ?></p>
    </div>

    <div class="area">
        <?php
            $area_3 =  get_field("area_3");
            $imagen = $area_3["imagen"]["sizes"]["medium_large"];
            $texto = $area_3["texto"];
        ?>
        <img src="<?php echo esc_attr($imagen); ?>" alt="<?php echo esc_attr($texto) ?>">
        <p><?php echo esc_html($texto); ?></p>
    </div>

    <div class="area">
        <?php
            $area_4 =  get_field("area_4");
            $imagen = $area_4["imagen"]["sizes"]["medium_large"];
            $texto = $area_4["texto"];
        ?>
        <img src="<?php echo esc_attr($imagen); ?>" alt="<?php echo esc_attr($texto) ?>">
        <p><?php echo esc_html($texto); ?></p>
    </div>

</section>

<main class="container section">
    <h2 class="text-center primary-text">Nuestras Clases</h2>
    <?php 
        gymfitness_lista_clases(4); 
    ?>

    <div class="button-container">
        <a href="<?php echo esc_url(get_permalink(21))?>" class="button primary-button">
            Ver todas las clases
        </a>
    </div>
</main>

<section class="container section">
    <h2 class="text-center primary-text">Nuestros Instructores</h2>
    <p class="text-center">Instructores profesionales que te ayudarán a lograr tus objetivos</p>
    <?php 
        gymfitness_instructores();
    ?>
</section>

<section class="testimonies">
    <h2 class="text-center white-text">Testimoniales</h2>
    <div class="testimonials-container">
        <?php 
            gymfitness_testimoniales();
        ?>
    </div>

</section>

<?php 
    get_footer();
?>