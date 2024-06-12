
<?php 
    get_header();
?>

    <main class="container section con-sidebar">
        <section class="main-content">
            <?php 
                get_template_part("template-parts/clase");
            ?>
        </section>
        <aside>
            <h2>sidebar aqui</h2>
        </aside>
    </main>

<?php 
    get_footer();
?>