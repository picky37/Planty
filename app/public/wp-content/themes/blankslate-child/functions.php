<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('chld_thm_cfg_parent_css')) :
    function chld_thm_cfg_parent_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array());
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);


// Fonction pour ajouter l'élément "Admin" dans le menu header à la deuxième position
function ajouter_item_admin_menu_header($items, $args)
{
    // Vérifier si l'utilisateur est connecté
    if (is_user_logged_in() && $args->theme_location == 'main-menu') {
        // Récupérer le lien vers le tableau de bord de l'administration
        $admin_link = admin_url();
        // Construire le HTML pour l'élément "Admin"
        $admin_item = '<li><a href="' . $admin_link . '">Admin</a></li>';

        // Fractionner les éléments du menu en un tableau
        $menu_items = explode('</li>', $items);

        // Insérer l'élément "Admin" à la deuxième position
        array_splice($menu_items, 1, 0, $admin_item);

        // Reconstruire la liste des éléments du menu
        $items = implode('</li>', $menu_items);
    }
    return $items;
}
// Ajouter la fonction au hook wp_nav_menu_items
add_filter('wp_nav_menu_items', 'ajouter_item_admin_menu_header', 10, 2);


// END ENQUEUE PARENT ACTION
