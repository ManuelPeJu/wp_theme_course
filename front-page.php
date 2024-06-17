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
            $texto = $area_1["texto"]
        ?>
        <img src="<?php echo esc_attr($imagen); ?>" alt="<?php echo esc_attr($texto) ?>">
        <p><?php echo esc_html($texto); ?></p>
    </div>
</section>

<main class="container section">
    
</main>

<?php 
    get_footer();
?>