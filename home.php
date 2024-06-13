<?php
    get_header(); // get the header
?>

<main class="section container">
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