<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

// add_filter( 'wp_get_nav_menu_items', __NAMESPACE__ . '\\prefix_nav_menu_classes', 10, 3 );

// function prefix_nav_menu_classes($items, $menu, $args) {
//     _wp_menu_item_classes_by_context($items);
//     return $items;
// }