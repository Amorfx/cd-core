<?php


namespace ClementCore\Admin;

class ThemeMenu {
    static $headerNavSlug = 'header';

    static function addNavMenus() {
        /*add_action('init', function() {
            register_nav_menus([
                self::$headerNavSlug => 'Header menu'
            ]);
        });*/

        add_action('wp_update_nav_menu', self::class . '::deleteCache');
    }

    static function deleteCache($menuID) {
        \Simply::get('framework.cache')->delete('menu:' . self::$headerNavSlug);
    }
}
