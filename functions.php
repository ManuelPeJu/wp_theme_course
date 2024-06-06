<?php 

    function gymfitness_menus() {
        register_nav_menus(array(
            // using the function register_nav_menus, we pass as argument a associative array, where the key is your menu name, 
            // and then use a associative array where first arg are the name of the menu and the second the text domain or name of the page.
            // This would change the name of the menu depends of the language you installed wordpress
            "menu-principal" => __("Menu Principal", "gymfitness"), 
        ));
    }

    add_action("init", "gymfitness_menus") // first param = the hook, second param = your function but on string

?>