<?php 

    // Includes 
    require get_template_directory() . '/includes/widgets.php';
    require get_template_directory() . '/includes/queries.php';


    // image support
    function gymfitness_setup(){
        // featured images
        add_theme_support("post-thumbnails");

        //seo for titles
        add_theme_support("title-tag");

    }
    add_action("after_setup_theme", "gymfitness_setup");
    //Menu function
    function gymfitness_menus() {
        register_nav_menus(array(
            // using the function register_nav_menus, we pass as argument a associative array, where the key is your menu name, 
            // and then use a associative array where first arg are the name of the menu and the second the text domain or name of the page.
            // This would change the name of the menu depends of the language you installed wordpress
            "menu-principal" => __("Menu Principal", "gymfitness"), 
        ));
    }

    add_action("init", "gymfitness_menus"); // first param = the hook, second param = your function but on string

    // add CSS and JS function
    function gymfitness_scripts_styles() {
        // CSS Files
        wp_enqueue_style("normalize", "https://necolas.github.io/normalize.css/8.0.1/normalize.css", array(), "8.0.1");
        wp_enqueue_style("lightboxcss", get_template_directory_uri() . "/css/lightbox.css", array(), "2.11.4" );
        wp_enqueue_style("swiper-css", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array(), "11.1.4");
        //using this funciont make us charge the css.
        // 1.- param are the name of the css (can be a unique name for every sheet)
        // 2.- param are a function that get the direction of the stylesheet
        // 3.- param are for the dependencies of your css processor example: "Bootstrap" or "Sass"
        // 4.- param are for the version of your dependency, very effective to control the version and make the caché work better
        wp_enqueue_style("style", get_stylesheet_uri(), array("normalize"), "1.0.0");

        // JS Files
        wp_enqueue_script("lightboxjs", get_template_directory_uri() . "/js/lightbox.js", array("jquery"), "2.11.4", true );
        wp_enqueue_script("swiper-js", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), "11.1.4", true);
        wp_enqueue_script("scripts", get_template_directory_uri(), array("swiper-js"), "1.0.0", true);
    }
    add_action("wp_enqueue_scripts", "gymfitness_scripts_styles");

    // Sidebar Widget

    function gymfitness_widgets() {
        register_sidebar(array(
            'name'           => 'sidebar 1',
            'id'             => 'sidebar_1',
            'before_widget'  => '<div class="widget">',
            'after_widget'   => '</div>',
            'before_title'   => '<h3 class"text-center text-primary">',
            'after_title'    => '</h3>',
        ));

        register_sidebar(array(
            'name'           => 'sidebar 2',
            'id'             => 'sidebar_2',
            'before_widget'  => '<div class="widget">',
            'after_widget'   => '</div>',
            'before_title'   => '<h3 class"text-center text-primary">',
            'after_title'    => '</h3>',
        ));
    }
    add_action("widgets_init", "gymfitness_widgets");




    //Create Shortcode
    function gymfitness_ubicacion_shortcode() {
        ?>
            <div class="map">
                <?php 
                    if(is_page("contacto")) {
                        the_field("ubicacion"); // show the map with the location
                    }
                ?>
            </div>
            <h2 class="text-center primary-text">Formulario de Contacto</h2>
        <?php
        echo do_shortcode('[contact-form-7 id="463757a" title="Formulario de contacto 1"]');
    }
    add_shortcode("gymfitness_ubicacion", "gymfitness_ubicacion_shortcode");


?>