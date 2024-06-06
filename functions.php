<?php 


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

    //add CSS function
    function gymfitness_scripts_styles() {
        wp_enqueue_style("normalize", "https://necolas.github.io/normalize.css/8.0.1/normalize.css", array(), "8.0.1");
        //using this funciont make us charge the css.
        // 1.- param are the name of the css (can be a unique name for every sheet)
        // 2.- param are a function that get the direction of the stylesheet
        // 3.- param are for the dependencies of your css processor example: "Bootstrap" or "Sass"
        // 4.- param are for the version of your dependency, very effective to control the version and make the caché work better
        wp_enqueue_style("style", get_stylesheet_uri(), array(), "1.0.0");
    }

    add_action("wp_enqueue_scripts", "gymfitness_scripts_styles");







?>