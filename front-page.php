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

<main class="container section">
    
</main>

<?php 
    get_footer();
?>