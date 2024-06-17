
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
       
        <?php 
            gymfitness_lista_clases(); // now we can get this info from our queries.php archive from includes
        ?>
    </main>

<?php 
    get_footer(); // get the footer
?>
