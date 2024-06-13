<?php
    get_header(); // get the header
?>

<main class="section container">
    <?php 
        $categoria = get_queried_object(); //get the object that WP are consulting to the DB
    ?>
    <h2 class="primary-text text-center">Categoría: <?php echo $categoria->name; ?></h2>
    <ul class="grid-list">
        <?php
            while (have_posts()) {
                the_post();
                get_template_part("template-parts/blog");
            }
        ?>
    </ul>
</main>

<?php
    get_footer(); // get the footer
?>