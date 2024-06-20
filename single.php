<?php 
    get_header();
?>

    <main class="container section">
        <?php 
            get_template_part("template-parts/post");
        ?>

        <div class="comments focus-content text-center">
            <?php 
                comment_form();
                ?>

                <h3 class="text-center primary-text comments">Comentarios</h3>
                <ul class="comments-list">
                    <?php 
                        $comentarios = get_comments(array(
                            'post_id' => $post -> ID,
                            'status' => 'approve',

                        ));
                        wp_list_comments(array(
                            'per_page' => 10,
                            'reverse_top_level' => false,
                        ), $comentarios)
                    
                    ?>
                </ul>

                <?php
            ?>
        </div>
    </main>

<?php 
    get_footer();
?>