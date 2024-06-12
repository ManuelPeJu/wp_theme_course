
<?php 
    get_header();
?>

    <main class="container section con-sidebar">
        <section class="main-content">
            <?php 
                get_template_part("template-parts/clase");
            ?>
        </section>

        <?php 
            get_sidebar("clases");
        ?>
    </main>

<?php 
    get_footer();
?>